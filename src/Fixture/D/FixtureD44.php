<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD44
{
    public function __construct(FixtureD43 $dependency)
    {
        usleep(1000);
    }
}
