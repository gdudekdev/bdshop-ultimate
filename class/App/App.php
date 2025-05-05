<?php 
namespace App;

class App{
      
      private static $db;

      public static function init(){
            session_start();
            require '../config/config.php';
            self::register();
      }
      public static function register(){
            spl_autoload_register(array(__CLASS__,"autoload"));
      }
      public static function autoload($class){
            require ROOT . '/class/' . str_replace("\\","/",$class) .'.php';
      }
      public static function db(){
            if(is_null(self::$db)){
                  self::$db = new \App\Database\Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
            }
            return self::$db;
      }
}