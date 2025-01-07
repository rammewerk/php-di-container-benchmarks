<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD35
{
    public function __construct(FixtureD34 $dependency)
    {
        usleep(1000);
    }
}
