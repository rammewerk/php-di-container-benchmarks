<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD46
{
    public function __construct(FixtureD45 $dependency)
    {
        usleep(1000);
    }
}
