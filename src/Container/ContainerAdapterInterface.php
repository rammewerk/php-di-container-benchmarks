<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

use Psr\Container\ContainerInterface;

interface ContainerAdapterInterface {

    public function build(): void;



    /**
     * @return ContainerInterface
     */
    public function bootstrapSingletonContainer(): ContainerInterface;



    /**
     * @return ContainerInterface
     */
    public function bootstrapPrototypeContainer(): ContainerInterface;


}
