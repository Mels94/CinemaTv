<?php


namespace application\components;


class Db
{
    public static function getConnection()
    {
        $paramsPath = __DIR__.'/../config/db_params.php';
        $params = include ($paramsPath);
        $dsn = "mysql:host={$params['host']}; dbname={$params['dbname']};charset=utf8";
        try {
            $db = new \PDO($dsn, $params['user'], $params['password']);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }

        return false;
    }
}