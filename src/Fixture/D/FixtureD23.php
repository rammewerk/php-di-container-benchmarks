<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD23
{
    public function __construct(FixtureD22 $dependency)
    {
        usleep(1000);
    }
}
