<?php

namespace Controller;

abstract class AController
{
    public function getViewer()
    {
        return new \View\Main();
    }

    public function doAction()
    {
        $method = 'doAction' . ucfirst(isset($_REQUEST['action']) ? $_REQUEST['action'] : 'default');

        if (!method_exists($this, $method)) {

            $method = 'doActionDefault';
        }

        return $this->{$method}();
    }

    protected function doActionDefault()
    {
    }
}
