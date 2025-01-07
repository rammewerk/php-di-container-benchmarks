<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD13
{
    public function __construct(FixtureD12 $dependency)
    {
        usleep(1000);
    }
}
