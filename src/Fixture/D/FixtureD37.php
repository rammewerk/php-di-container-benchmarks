<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD37
{
    public function __construct(FixtureD36 $dependency)
    {
        usleep(1000);
    }
}
