<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD5
{
    public function __construct(FixtureD4 $dependency)
    {
        usleep(1000);
    }
}
