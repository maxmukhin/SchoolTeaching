<?php

namespace Model;

class Data extends \Core\Singleton
{
    public function add($entity)
    {
        return file_put_contents('content.data', "\r\n" . $entity, FILE_APPEND);
    }

    public function getAll()
    {
        return file('content.data');
    }
}
