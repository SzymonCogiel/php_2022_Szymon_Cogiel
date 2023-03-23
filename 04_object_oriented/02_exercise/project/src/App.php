<?php

class App
{
    public function run(): void {
        echo "Hello from App.php!";
        echo "<br/>";

        $dummy = new Dummy("key");

        $s = serialize($dummy);

        // save to file

        // read from file

        $o = unserialize($s);

        if (!$o instanceof Dummy)
            exit("Wring type!");

        $o->test();
    }
}
