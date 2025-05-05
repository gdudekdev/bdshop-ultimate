<?php 
namespace App;

class App{

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
      
}