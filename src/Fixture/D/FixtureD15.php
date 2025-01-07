<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD15
{
    public function __construct(FixtureD14 $dependency)
    {
        usleep(1000);
    }
}
