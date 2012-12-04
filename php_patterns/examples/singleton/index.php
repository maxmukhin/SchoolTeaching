<?php

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

            echo "<strong>Initiate $class class inside the parent Singleton ...</strong><br />";
        }

        return static::$instances[$class];
    }

    /**
     * Just to use it in the \ShowInstances class.
     * Do not use it in LIVE mode
     */
    public function showInstancesInfo()
    {
        var_dump(static::$instances);
    }
}

class Config extends Singleton
{
    protected $config = array();

    public static function getInstance()
    {
        return parent::getInstance()->init();
    }

    protected function init()
    {
        if (empty($this->config)) {
            $this->config = parse_ini_file('./config.ini', true);
        }

        return $this->config;
    }
}

class ShowInstances extends Singleton
{
}

echo "Use config class for \$a variable<br /><br />";
$a = \Config::getInstance();

echo "Use config class for \$b variable<br /><br />";
$b = \Config::getInstance();

echo "Show \$a and \$b variables:<br />";
var_dump($a, $b);

echo "<br />Initiate and show all instances in Singleton class:<br />";
\ShowInstances::getInstance()->showInstancesInfo();


