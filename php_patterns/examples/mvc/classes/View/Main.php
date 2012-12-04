<?php

namespace View;

class Main extends AView
{
    protected function getData()
    {
        $data = 'Main target is working...<br />';

        $data .= implode('<br />', \Model\Data::getInstance()->getAll());

        return $data;
    }
}
