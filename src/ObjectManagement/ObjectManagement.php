<?php


namespace HomeTest\ObjectManagement;


use HomeTest\Modules\Common\IdMySQL;

class ObjectManagement implements ObjectManagementInterface
{
    private static ObjectManagement $instance;

    public static function getInstance(): ObjectManagement
    {
        if (!self::$instance)
            self::$instance = new ObjectManagement();

        return self::$instance;
    }

    public function persist(IdMySQL $idMySQL)
    {
        // TODO: Implement persist() method.
    }

    public function flush()
    {
        // TODO: Implement flush() method.
    }
}