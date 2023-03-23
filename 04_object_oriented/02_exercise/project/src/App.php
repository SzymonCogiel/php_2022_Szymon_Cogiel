<?php

use Foo\Bar\Baz;

class App
{
    public function run(): void {
        echo "Hello from App.php!";
        echo "<br/>";

        $dummy = new Dummy("key");

        $baz = new Baz();
        $baz -> test();

        // zwraca bytes objekt zamiast
        $s = serialize($dummy);

        // save to file
        file_put_contents('test.txt', $s);
        // read from file

        $o = unserialize($s);

        if (!$o instanceof Dummy)
            exit("Wring type!");

        $o->test();
    }
}
