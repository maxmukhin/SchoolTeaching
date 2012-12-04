<?php

const DS = DIRECTORY_SEPARATOR;

function autoloader($class) {
    include_once '.' . DS . 'classes' . DS . str_replace('/', DS, $class) . '.php';
}

spl_autoload_register('autoloader');

\Dispatcher::getInstance()->start();

