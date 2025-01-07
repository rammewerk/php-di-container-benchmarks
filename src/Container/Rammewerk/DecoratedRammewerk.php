<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Rammewerk;

use Psr\Container\ContainerInterface;
use Rammewerk\Component\Container\Container;

final class DecoratedRammewerk extends Container implements ContainerInterface
{
    public function has($id): bool {
        return true;
    }

    public function get(string $id)
    {
        return $this->create($id);
    }
}
