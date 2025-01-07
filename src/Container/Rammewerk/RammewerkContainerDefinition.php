<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Rammewerk;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class RammewerkContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "rammewerk/container";
    }

    public function getName(): string
    {
        return "rammewerk";
    }

    public function getDisplayedName(): string
    {
        return "Rammewerk";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://github.com/rammewerk/container";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new RammewerkContainerAdapter();
    }
}
