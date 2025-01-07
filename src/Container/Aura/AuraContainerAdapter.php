<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use Aura\Di\ContainerBuilder;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Test\UnsupportedTestException;
use Psr\Container\ContainerInterface;

final class AuraContainerAdapter implements ContainerAdapterInterface {

    public function build(): void {}



    public function bootstrapSingletonContainer(): ContainerInterface {
        return new ContainerBuilder()->newConfiguredInstance( [new AuraSingletonContainerConfig()], true );
    }



    public function bootstrapPrototypeContainer(): ContainerInterface {
        throw new UnsupportedTestException( "Aura doesn't support the prototype scope via the PSR-11 interface" );
    }


}
