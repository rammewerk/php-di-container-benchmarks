<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use Aura\Di\Container;
use Aura\Di\ContainerBuilder;
use Aura\Di\Resolver\Reflector;
use Aura\Di\Resolver\Resolver;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use Psr\Container\ContainerInterface;

final class AuraContainerAdapter implements ContainerAdapterInterface {

    public function build(): void {}



    public function bootstrapSingletonContainer(): ContainerInterface {
        return new ContainerBuilder()->newConfiguredInstance( [new AuraSingletonContainerConfig()], true );
    }



    public function bootstrapPrototypeContainer(): ContainerInterface {
        $container = new Container( new Resolver( new Reflector() ) );

        for ($i = 1; $i <= 100; $i++) {
            $className = "DiContainerBenchmarks\\Fixture\\A\\FixtureA$i";
            $container->set($className, $container->lazyNew($className));
        }

        for ($i = 1; $i <= 1000; $i++) {
            $className = "DiContainerBenchmarks\\Fixture\\B\\FixtureB$i";
            $container->set($className, $container->lazyNew($className));
        }

        for ($i = 1; $i <= 1000; $i++) {
            $className = "DiContainerBenchmarks\\Fixture\\C\\FixtureC$i";
            $container->set($className, $container->lazyNew($className));
        }

        for ($i = 1; $i <= 50; $i++) {
            $className = "DiContainerBenchmarks\\Fixture\\D\\FixtureD$i";
            $container->set($className, $container->lazyNew($className));
        }

        return $container;
        #throw new UnsupportedTestException( "Aura doesn't support the prototype scope via the PSR-11 interface" );
    }


}
