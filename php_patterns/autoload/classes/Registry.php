<?php

class Registry
{
    protected static $registry = array();

    public static function get($name)
    {
        return isset(static::$registry[$name]) ? static::$registry[$name] : '';
    }

    public static function set($name, $value)
    {
        static::$registry[$name] = $value;
    }

}
