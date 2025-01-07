<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\Symfony\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Symfony\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Fixture\A\FixtureA10;
use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use Psr\Container\ContainerInterface;
use RuntimeException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

use function file_put_contents;
use function glob;
use function is_dir;
use function key;
use function mkdir;
use function rmdir;
use function sprintf;
use function strpos;
use function substr;
use function unlink;

final class SymfonyContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
        $path = PROJECT_ROOT . "/src/Container/Symfony/Resource/";

        foreach (glob($path . "/Container*/") as $dir) {
            foreach (glob($dir . "/*") as $file) {
                unlink($file);
            }
            rmdir($dir);
        }

        // Build container with prototype services
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter("container.dumper.inline_class_loader", false);
        $containerBuilder->setParameter("container.dumper.inline_factories", false);

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\A\\FixtureA$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\A\\FixtureA$i", $definition);
        }

        for ($i = 1; $i <= 1000; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\B\\FixtureB$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $definition->setPublic(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\B\\FixtureB$i", $definition);
        }

        for ($i = 1; $i <= 50; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\D\\FixtureD$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $definition->setPublic(true);
            $definition->setLazy( true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\D\\FixtureD$i", $definition);
        }

        $definition = new Definition(FixtureC1000::class, []);
        $definition->setShared(false);
        $definition->setAutowired(true);
        $definition->setPublic(true);
        $containerBuilder->setDefinition(FixtureC1000::class, $definition);

        for ($i = 1; $i <= 1000; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\C\\FixtureC$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\C\\FixtureC$i", $definition);
        }

        $containerBuilder->getDefinition(FixtureA10::class)->setPublic(true);
        $containerBuilder->getDefinition(FixtureA100::class)->setPublic(true);
        $containerBuilder->getDefinition(FixtureC1000::class)->setPublic(true);

        $containerBuilder->compile();
        $this->dumpContainer(
            $containerBuilder,
            $path,
            "CompiledPrototypeContainer",
            false
        );

        // Build container with singleton services
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter("container.dumper.inline_class_loader", false);
        $containerBuilder->setParameter("container.dumper.inline_factories", false);

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\A\\FixtureA$i", []);
            $definition->setShared(true);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\A\\FixtureA$i", $definition);
        }

        for ($i = 1; $i <= 1000; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\B\\FixtureB$i", []);
            $definition->setShared(true);
            $definition->setAutowired(true);
            $definition->setPublic(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\B\\FixtureB$i", $definition);
        }

        for ($i = 1; $i <= 1000; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\C\\FixtureC$i", []);
            $definition->setShared(true);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\C\\FixtureC$i", $definition);
        }

        $containerBuilder->getDefinition(FixtureA10::class)->setPublic(true);
        $containerBuilder->getDefinition(FixtureA100::class)->setPublic(true);
        $containerBuilder->getDefinition(FixtureC1000::class)->setPublic(true);

        $containerBuilder->compile();
        $this->dumpContainer(
            $containerBuilder,
            $path,
            "CompiledSingletonContainer",
            false
        );
    }

    public function bootstrapSingletonContainer(): ContainerInterface {
        //return require __DIR__ . "/Resource/CompiledSingletonContainer.php";
        return new CompiledSingletonContainer();
    }

    public function bootstrapPrototypeContainer(): ContainerInterface {
        //return require __DIR__ . "/Resource/CompiledPrototypeContainer.php";
        return new CompiledPrototypeContainer();
    }

    protected function dumpContainer(ContainerBuilder $containerBuilder, string $path, string $class, bool $asFiles): void
    {
        $dumper = new PhpDumper($containerBuilder);
        $content = $dumper->dump(
            [
                "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                "class" => $class,
                "as_files" => $asFiles,
                "debug" => false,
            ]
        );

        if ($asFiles) {
            $file = key($content);
            $dir = $path . substr($file, 0, strpos($file, "/"));
            $result = @mkdir($dir, 0777, true) || is_dir($dir);
            if ($result === false) {
                throw new RuntimeException(sprintf("Unable to create the container directory (%s)\n", $dir));
            }

            foreach ($content as $file => $code) {
                file_put_contents($path . $file, $code);
            }
        } else {
            file_put_contents($path . $class . ".php", $content);
        }
    }
}
