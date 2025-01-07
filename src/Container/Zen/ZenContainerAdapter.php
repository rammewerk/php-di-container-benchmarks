<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\Zen\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Zen\Resource\CompiledSingletonContainer;
use Psr\Container\ContainerInterface;
use WoohooLabs\Zen\Container\Builder\FileSystemContainerBuilder;

final class ZenContainerAdapter implements ContainerAdapterInterface {

    public function build(): void {
        // Build container with prototype services
        $builder = new FileSystemContainerBuilder(
            new ZenPrototypeCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledPrototypeContainer.php",
            ""
        );
        $builder->build();

        // Build container with singleton services
        $builder = new FileSystemContainerBuilder(
            new ZenSingletonCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledSingletonContainer.php",
            ""
        );
        $builder->build();
    }



    public function bootstrapSingletonContainer(): ContainerInterface {
        return new CompiledSingletonContainer();
    }



    public function bootstrapPrototypeContainer(): ContainerInterface {
        return new CompiledPrototypeContainer();
    }


}
