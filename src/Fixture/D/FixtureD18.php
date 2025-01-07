<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD18
{
    public function __construct(FixtureD17 $dependency)
    {
        usleep(1000);
    }
}
