<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD30
{
    public function __construct(FixtureD29 $dependency)
    {
        usleep(1000);
    }
}
