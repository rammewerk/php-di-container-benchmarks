<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD24
{
    public function __construct(FixtureD23 $dependency)
    {
        usleep(1000);
    }
}
