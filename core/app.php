<?php

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {

        static::$registry[$key] = $value;

    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {

            throw new Execption("Whoops! No {$key} found in container");

        }

        return static::$registry[$key];

    }

}
