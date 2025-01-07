<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD28
{
    public function __construct(FixtureD27 $dependency)
    {
        usleep(1000);
    }
}
