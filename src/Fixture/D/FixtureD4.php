<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD4
{
    public function __construct(FixtureD3 $dependency)
    {
        usleep(1000);
    }
}
