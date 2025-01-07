<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD22
{
    public function __construct(FixtureD21 $dependency)
    {
        usleep(1000);
    }
}
