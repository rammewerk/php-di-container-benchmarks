<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD40
{
    public function __construct(FixtureD39 $dependency)
    {
        usleep(1000);
    }
}
