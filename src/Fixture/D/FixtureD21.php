<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD21
{
    public function __construct(FixtureD20 $dependency)
    {
        usleep(1000);
    }
}
