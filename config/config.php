<?php
namespace Youdemy\Config;

class Database{
    private static $host= "localhost";
    private static $db_name= "youdemy";
    private static $username= "root";
    private static $password= "";
    private static $conn;

    public static function getConnection(){
        if(self::$conn){
            return self::$conn;
        }else{
            self::$conn=new PDO("mysql:host=".self::$host.";db_name=".self::$db_name, self::$username, self::$password);
            return self::$conn;
        }
    }
}

Database::getConnection();

?>