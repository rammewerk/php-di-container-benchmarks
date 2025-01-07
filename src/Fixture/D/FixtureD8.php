<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD8
{
    public function __construct(FixtureD7 $dependency)
    {
        usleep(1000);
    }
}
