<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD20
{
    public function __construct(FixtureD19 $dependency)
    {
        usleep(1000);
    }
}
