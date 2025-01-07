<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD25
{
    public function __construct(FixtureD24 $dependency)
    {
        usleep(1000);
    }
}
