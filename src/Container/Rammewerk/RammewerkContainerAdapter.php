<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Rammewerk;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Fixture\A\FixtureA10;
use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use Psr\Container\ContainerInterface;

final class RammewerkContainerAdapter implements ContainerAdapterInterface {

    public function build(): void {}



    public function bootstrapSingletonContainer(): ContainerInterface {
        $container = new DecoratedRammewerk();

        $shared_classes = [
            FixtureA10::class,
            FixtureA100::class,
            FixtureC1000::class
        ];

        for( $i = 1; $i <= 1000; $i++ ) {
            $shared_classes[] = "DiContainerBenchmarks\\Fixture\\B\\FixtureB$i";
        }

        return $container->share( $shared_classes );

    }



    public function bootstrapPrototypeContainer(): ContainerInterface {
        return new DecoratedRammewerk();
    }


}
