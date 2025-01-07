<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use function number_format;

final class TestCase {

    public const string COLD = "cold";
    public const string WARM = "semi_warm";
    public const string HOT = "hot";



    /**
     * @param string[] $classesToRetrieve
     */
    public function __construct(
        public readonly int $number,
        public readonly int $iterations,
        public readonly string $mode,
        public readonly bool $singleton,
        public readonly array $classesToRetrieve
    ) {}



    public function getTitle(): string {
        $title = number_format( $this->iterations, 0, ".", " " );
        $title .= " iteration" . ($this->iterations > 1 ? "s" : "") . ", ";

        switch( $this->mode ) {
            case self::COLD:
                $title .= "container bootstrap time included";
                break;
            case self::WARM:
                $title .= "container bootstrap time excluded";
                break;
            case self::HOT:
                $title .= "container already warmed up";
                break;
        }

        return $title;
    }



}
