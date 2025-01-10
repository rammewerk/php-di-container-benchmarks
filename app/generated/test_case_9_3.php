<?php

declare(strict_types=1);

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Test\TestResult;

/** @var ContainerAdapterInterface $adapter */

// Warm-up
$container = $adapter->bootstrapSingletonContainer();
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
gc_collect_cycles();

// Start benchmark
$t1 = hrtime(true);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB1::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB2::class);
$container->get(DiContainerBenchmarks\Fixture\B\FixtureB5::class);
$t2 = hrtime(true);
// End benchmark

return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
