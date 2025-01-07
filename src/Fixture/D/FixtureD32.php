<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD32
{
    public function __construct(FixtureD31 $dependency)
    {
        usleep(1000);
    }
}
