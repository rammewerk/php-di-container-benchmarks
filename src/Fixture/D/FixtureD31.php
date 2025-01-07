<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD31
{
    public function __construct(FixtureD30 $dependency)
    {
        usleep(1000);
    }
}
