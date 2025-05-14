<?php

namespace App\Model;

class Model
{
      public static $table;
      public static $prefix;

      public static function getAll()
      {
            $sql = 'SELECT * FROM ' . get_called_class()::$table;

            return \App\App::db()->fetchAll($sql);
      }
      public static function getOne(int $id)
      {
            $sql = 'SELECT * FROM ' . get_called_class()::$table . ' WHERE ' . get_called_class()::$prefix . 'id=:id';
            return \App\App::db()->fetch($sql, [':id' => $id]);
      }
}
