<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD17
{
    public function __construct(FixtureD16 $dependency)
    {
        usleep(1000);
    }
}
