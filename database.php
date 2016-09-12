<?php
class Database
{
    private static $dbName = 'heroku_f75540403a58ed0' ;
    private static $dbHost = 'us-cdbr-iron-east-04.cleardb.net' ;
    private static $dbUsername = 'b641487ee7fa50';
    private static $dbUserPassword = 'eb61dd24';
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>