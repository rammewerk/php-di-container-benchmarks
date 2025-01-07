<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD36
{
    public function __construct(FixtureD35 $dependency)
    {
        usleep(1000);
    }
}
