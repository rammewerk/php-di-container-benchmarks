<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD3
{
    public function __construct(FixtureD2 $dependency)
    {
        usleep(1000);
    }
}
