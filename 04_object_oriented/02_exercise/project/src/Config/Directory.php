<?php

namespace Config;

class Directory
{
    private static string $root;

    public static function set(string $root): void
    {
        // self:: używany do odwołania się do zmienneych statycznych
       	self::$root = $root;
    }

    public static function root(): string{
        return '';
    }

    public static function storage(): string{
        return '';
    }

    public static function view(): string{
        return '';
    }

    public static function src(): string{
        return '';
    }
}
