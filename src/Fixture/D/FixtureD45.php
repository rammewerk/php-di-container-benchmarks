<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD45
{
    public function __construct(FixtureD44 $dependency)
    {
        usleep(1000);
    }
}
