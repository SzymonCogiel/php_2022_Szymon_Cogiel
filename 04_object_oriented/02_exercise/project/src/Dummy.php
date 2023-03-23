<?php

class Dummy
{
    private string $id;

    public function __construct(string $id)
    {
        $baz = new \Foo\Bar\Baz();

        $this->id = $id;
    }

    public function test(): void
    {
        echo "Test: $this->id";
    }
}