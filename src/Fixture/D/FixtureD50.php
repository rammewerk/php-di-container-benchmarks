<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD50
{
    public function __construct(FixtureD49 $dependency)
    {
        usleep(1000);
    }
}
