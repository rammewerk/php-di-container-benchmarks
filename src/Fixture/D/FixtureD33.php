<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD33
{
    public function __construct(FixtureD32 $dependency)
    {
        usleep(1000);
    }
}
