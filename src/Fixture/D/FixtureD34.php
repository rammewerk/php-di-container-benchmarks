<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD34
{
    public function __construct(FixtureD33 $dependency)
    {
        usleep(1000);
    }
}
