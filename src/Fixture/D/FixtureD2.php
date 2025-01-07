<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD2
{
    public function __construct(FixtureD1 $dependency)
    {
        usleep(1000);
    }
}
