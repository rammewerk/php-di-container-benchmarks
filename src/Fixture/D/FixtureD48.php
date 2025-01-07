<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD48
{
    public function __construct(FixtureD47 $dependency)
    {
        usleep(1000);
    }
}
