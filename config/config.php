<?php
class Database{
    private static $host= "localhost";
    private static $db_name= "Youdemy";
    private static $username= "Youdemy";
    private static $password= "root";
    private static $conn;

    public static function getConnection(){
        if(self::$conn){
            return self::$conn;
        }else{
            self::$conn=new PDO("mysql:host=".self::$host.";db_name=".self::$db_name, self::$username, self::$pssword);
            return self::$conn;
        }
    }
}

Database::getConnection();

?>