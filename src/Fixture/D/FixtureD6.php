<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD6
{
    public function __construct(FixtureD5 $dependency)
    {
        usleep(1000);
    }
}
