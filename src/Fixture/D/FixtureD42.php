<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD42
{
    public function __construct(FixtureD41 $dependency)
    {
        usleep(1000);
    }
}
