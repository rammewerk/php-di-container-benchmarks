<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\B\FixtureB1;
use DiContainerBenchmarks\Fixture\B\FixtureB2;
use DiContainerBenchmarks\Fixture\B\FixtureB5;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Fixture\D\FixtureD50;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite9 implements TestSuiteInterface
{

    public function getNumber(): int
    {
        return 9;
    }


    public function getTitle(): string
    {
        return "Instantiating a few small object graphs - Singleton scope";
    }


    public function getDescription(): string
    {
        return <<<HERE
This test suite instantiates 3 different objects (singleton), repeated 10, 20, and 30 times. It demonstrates how containers perform when only a few objects are initialized, while still having to manage a large number of cached or defined services. This mirrors real-world scenarios where most requests require only a small subset of services, but containers must still handle the overhead of loading definitions or cache.
HERE;
    }


    public function getTestCases(): array
    {
        return [
            new TestCase(
                1,
                10,
                TestCase::COLD,
                true,
                [FixtureB1::class, FixtureB2::class, FixtureB5::class]
            ),
            new TestCase(
                2,
                20,
                TestCase::WARM,
                true,
                [FixtureB1::class, FixtureB2::class, FixtureB5::class]
            ),
            new TestCase(
                3,
                30,
                TestCase::HOT,
                true,
                [FixtureB1::class, FixtureB2::class, FixtureB5::class]
            ),
        ];
    }


}
