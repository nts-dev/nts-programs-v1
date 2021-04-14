<?php


class SessionDatabase
{

    private static $INSTANCE = null;

    private function __construct()
    {
    }

    public static function getInstance(): SessionDatabase
    {
        if (self::$INSTANCE == null)
            self::$INSTANCE = new SessionDatabase();
        return self::$INSTANCE;
    }

    public static function getConnection()
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . Boot::DBHOST . ";dbname=" . Boot::DBNAME, Boot::DBUSER, Boot::DBPASS,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOExeption $exception) {
            return "Conection Error: " . $exception->getMessage();
        }
        return $conn;
    }
}