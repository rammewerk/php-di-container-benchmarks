<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD9
{
    public function __construct(FixtureD8 $dependency)
    {
        usleep(1000);
    }
}
