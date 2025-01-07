<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD16
{
    public function __construct(FixtureD15 $dependency)
    {
        usleep(1000);
    }
}
