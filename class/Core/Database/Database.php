<?php

namespace Core\Database;

class Database
{

      protected $db_host;
      protected $db_name;
      protected $db_user;
      protected $db_pass;

      protected $db;

      public function __construct($db_host, $db_name, $db_user, $db_pass)
      {
            $this->db_host = $db_host;
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
      }
      public function fetch(string $sql, array $bound = [])
      {
            return $this->execute($sql, $bound, false);
      }
      public function fetchAll(string $sql, $bound = false)
      {
            return $this->execute($sql, $bound, true);
      }
}
