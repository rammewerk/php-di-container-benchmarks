<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD47
{
    public function __construct(FixtureD46 $dependency)
    {
        usleep(1000);
    }
}
