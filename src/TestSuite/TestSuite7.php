<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Fixture\D\FixtureD50;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite7 implements TestSuiteInterface {

    public function getNumber(): int {
        return 7;
    }



    public function getTitle(): string {
        return "Instantiating a single, heavy, large sized object graph - Prototype scope";
    }



    public function getDescription(): string {
        return <<<HERE
In this test suite, containers must create an object graph consisting of 50 objects, where each object’s constructor includes a usleep(5) call to simulate a heavier initialization process. This test highlights how effectively containers handle lazy loading of objects. It runs with 1, 2, and 4 iterations. Note that autoloading and bootstrap times are excluded from the measurements.
HERE;
    }


    public function getTestCases(): array {
        return [
            new TestCase(
                1,
                1,
                TestCase::COLD,
                false,
                [FixtureD50::class]
            ),
            new TestCase(
                2,
                2,
                TestCase::WARM,
                false,
                [FixtureD50::class]
            ),
            new TestCase(
                3,
                4,
                TestCase::HOT,
                false,
                [FixtureD50::class]
            ),
        ];
    }


}
