<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD12
{
    public function __construct(FixtureD11 $dependency)
    {
        usleep(1000);
    }
}
