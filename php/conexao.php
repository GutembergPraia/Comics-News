<?php

class Conexao
{
   private static $connection;

   private function __construct(){}

   public static function getConnection()
   {
    if(!defined('DB_HOST'))
    {
      define('DB_HOST'        , "localhost");
      define('DB_USER'        , "root");
      define('DB_PASSWORD'    , "");
      define('DB_NAME'        , "comicsnews");
      define('DB_DRIVER'      , "mysql");
    }

    $pdoConfig  = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
    $pdoConfig .= "dbname=".DB_NAME.";";
    $pdoConfigCharSet = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    try
    {
      if(!isset($connection))
      {
        $connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD, $pdoConfigCharSet);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
        return $connection;
      } catch (PDOException $e)
      {
        $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
        $mensagem .= "\nErro: " . $e->getMessage();
        throw new Exception($mensagem);
      }
   }
}
