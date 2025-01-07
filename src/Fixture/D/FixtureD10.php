<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD10
{
    public function __construct(FixtureD9 $dependency)
    {
        usleep(1000);
    }
}
