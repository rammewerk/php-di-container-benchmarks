<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD49
{
    public function __construct(FixtureD48 $dependency)
    {
        usleep(1000);
    }
}
