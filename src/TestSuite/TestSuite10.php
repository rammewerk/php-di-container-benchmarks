<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\D\FixtureD25;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite10 implements TestSuiteInterface
{

    public function getNumber(): int
    {
        return 10;
    }


    public function getTitle(): string
    {
        return "Instantiating a single, heavy, large sized object graph - Singleton scope";
    }


    public function getDescription(): string
    {
        return <<<HERE
Same as Test 7, but with a single object instead of prototype scope.
HERE;
    }


    public function getTestCases(): array
    {
        return [
            new TestCase(
                1,
                1,
                TestCase::COLD,
                true,
                [FixtureD25::class]
            ),
            new TestCase(
                2,
                1,
                TestCase::WARM,
                true,
                [FixtureD25::class]
            ),
            new TestCase(
                3,
                1,
                TestCase::HOT,
                true,
                [FixtureD25::class]
            ),
        ];
    }


}
