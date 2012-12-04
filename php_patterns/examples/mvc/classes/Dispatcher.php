<?php

class Dispatcher extends \Core\Singleton
{
    public function start()
    {
        $controller = $this->getController();

        $controller->doAction();

        $viewer = $controller->getViewer();

        $viewer->display();
    }

    protected function getController()
    {
        $target = isset($_REQUEST['target']) ? $_REQUEST['target'] : 'main';

        $controllerClass = '\Controller\\' . ucfirst($target);

        if (!class_exists($controllerClass)) {

            $controllerClass = '\Controller\Main';
        }

        return new $controllerClass();
    }
}

