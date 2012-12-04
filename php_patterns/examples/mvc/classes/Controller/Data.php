<?php

namespace Controller;

class Data extends AController
{
    protected function doActionAdd()
    {
        \Model\Data::getInstance()->add($_REQUEST['data']);

        header('Location: index.php');
    }
}
