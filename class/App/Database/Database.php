<?php

namespace App\Database;

use PDO;

class Database extends \Core\Database\Database
{
      public function connect()
      {
            if (is_null($this->db)) {
                  $this->db = new PDO("mysql:localhost=" . $this->db_host . ";dbname=" . $this->db_name . ";charset=utf8", $this->db_user, $this->db_pass);
            }
            return $this->db;
      }
      protected function execute(string $sql, bool|array $bound = false, bool $all = true)
      {
            $stmt = $this->connect()->prepare($sql);
            if ($bound) {
                  foreach ($bound as $key => $value) {
                        if (gettype($value) == 'array') {
                              $stmt->bindValue($key, $value[0], $value[1]);
                        } else {
                              $stmt->bindValue($key, $value);
                        }
                  }
            }
            $stmt->execute();

            return $all ? $stmt->fetchAll(PDO::FETCH_ASSOC) : $stmt->fetch(PDO::FETCH_ASSOC);
      }
}
