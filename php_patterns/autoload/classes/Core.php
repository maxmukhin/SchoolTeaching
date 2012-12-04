<?php

class Core
{
    public function setRegistryStart()
    {
        \Registry::set('core', 'start');
    }

    public function setRegistryFinish()
    {
        \Registry::set('core', 'finish');
    }
}

