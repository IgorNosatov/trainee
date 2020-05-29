<?php

namespace application\models;

use application\core\Db;

abstract class ActiveRecord
{

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM `' . static::getTableName() . '`;', [], static::class);
    }

    abstract protected static function getTableName();

}
