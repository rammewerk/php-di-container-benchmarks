<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD43
{
    public function __construct(FixtureD42 $dependency)
    {
        usleep(1000);
    }
}
