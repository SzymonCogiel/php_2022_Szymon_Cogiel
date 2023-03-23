<?php

namespace Storage;

use Concept\Distinguishable;

class FileStorage
{
    public function store(Distinguishable $distinguishable = null): void{

    }

    /**
     * @return Distinguishable[]
     */
    public function loadAll(): array{
        $d = array();
        return $d;
    }
}