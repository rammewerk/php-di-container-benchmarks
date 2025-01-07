<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD19
{
    public function __construct(FixtureD18 $dependency)
    {
        usleep(1000);
    }
}
