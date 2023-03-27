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

    public static function root(): string
    {
        return self::$root;
    }

    public static function storage(): string
    {
        return "../storage/";
    }

    public static function view(): string
    {
        throw new \Error("Directory Views not exists");
    }

    public static function src(): string
    {
        return "../src/";
    }
}
