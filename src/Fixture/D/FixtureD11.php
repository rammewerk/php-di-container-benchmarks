<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD11
{
    public function __construct(FixtureD10 $dependency)
    {
        usleep(1000);
    }
}
