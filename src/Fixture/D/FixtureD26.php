<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD26
{
    public function __construct(FixtureD25 $dependency)
    {
        usleep(1000);
    }
}
