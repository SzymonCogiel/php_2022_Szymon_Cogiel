<?php

namespace Storage;

use Concept\Distinguishable;

interface Storage
{
    public function store(Distinguishable $distinguishable = null): void;

    /**
     * @return Distinguishable[]
     */
    public function loadAll(): array;
}