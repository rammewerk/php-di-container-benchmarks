<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD7
{
    public function __construct(FixtureD6 $dependency)
    {
        usleep(1000);
    }
}
