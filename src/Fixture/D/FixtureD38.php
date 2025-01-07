<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD38
{
    public function __construct(FixtureD37 $dependency)
    {
        usleep(1000);
    }
}
