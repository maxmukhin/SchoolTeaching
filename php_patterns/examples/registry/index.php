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

\Registry::set('lala', 'test');
\Registry::set('test', 'store');
\Registry::set('tmp', '123455');


var_dump(
    \Registry::get('lala'),
    \Registry::get('test'),
    \Registry::get('tmp'),
    \Registry::get('temp')
);
