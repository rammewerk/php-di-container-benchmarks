<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD39
{
    public function __construct(FixtureD38 $dependency)
    {
        usleep(1000);
    }
}
