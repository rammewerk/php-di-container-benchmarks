<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD14
{
    public function __construct(FixtureD13 $dependency)
    {
        usleep(1000);
    }
}
