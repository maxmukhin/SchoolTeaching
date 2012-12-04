<?php

function autoloader($class) {
    include_once './classes/' . $class . '.php';
}

spl_autoload_register('autoloader');

echo "<strong>Try to get 'Registry' class</strong>";

\Registry::set('test', 123);

var_dump(\Registry::get('test'));

echo "Initiate Core class<br />";
$core = new \Core();

$core->setRegistryStart();

var_dump(\Registry::get('core'));

$core->setRegistryFinish();

var_dump(\Registry::get('core'));