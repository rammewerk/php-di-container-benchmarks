<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use Psr\Container\ContainerInterface;

final class DiceContainerAdapter implements ContainerAdapterInterface {

    public function build(): void {}



    public function bootstrapSingletonContainer(): ContainerInterface {
        return new DecoratedDice()->addRule( '*', ["shared" => true] );
    }



    public function bootstrapPrototypeContainer(): ContainerInterface {
        return new DecoratedDice();
    }


}
