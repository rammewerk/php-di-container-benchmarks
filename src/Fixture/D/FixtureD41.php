<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\D;

class FixtureD41
{
    public function __construct(FixtureD40 $dependency)
    {
        usleep(1000);
    }
}
