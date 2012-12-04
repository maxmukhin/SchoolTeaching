<?php

namespace Core;

abstract class Singleton
{
    protected static $instances = array();

    /**
     * The main initiate method to use
     *
     * @return \Singleton
     */
    public static function getInstance()
    {
        // Get "Late binding" class name. The name of the class where this "static" method is called.
        $class = get_called_class();

        if (!isset(static::$instances[$class])) {

            static::$instances[$class] = new $class();
        }

        return static::$instances[$class];
    }
}
