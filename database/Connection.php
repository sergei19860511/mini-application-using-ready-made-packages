<?php

namespace database;

class Connection
{
    private static $instance = null;

    private static function make()
    {
        $host = DB_CONNECT;
        $dbName = DB_NAME;
        $userName = DB_USER;
        $userPass = DB_PASSWORD;
        $charset = DB_CHARSET;
        return new \PDO(
            "{$host};
             dbname={$dbName};
             charset={$charset}",
            $userName,
            $userPass,
        );
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = self::make();
        }
        return self::$instance;
    }
}
