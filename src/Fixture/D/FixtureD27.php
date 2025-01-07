<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD27
{
    public function __construct(FixtureD26 $dependency)
    {
        usleep(1000);
    }
}
