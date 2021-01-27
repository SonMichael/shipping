<?php


namespace HomeTest\ObjectManagement;


use HomeTest\Modules\Common\IdMySQL;

interface ObjectManagementInterface
{
    /**
     * @param IdMySQL $idMySQL
     * Prepare object will be update or created to MySQL
     */
    public function persist(IdMySQL $idMySQL);

    /**
     * Do query into DB
     */
    public function flush();
}