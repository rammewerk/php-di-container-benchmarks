<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD29
{
    public function __construct(FixtureD28 $dependency)
    {
        usleep(1000);
    }
}
