<?php

// Based on ConnectionFactory from http://stackoverflow.com/questions/130878/global-or-singleton-for-database-connection
class ConnectionFactory
{
    private static $factory;
    public static function getFactory()
    {
        if (!self::$factory)
            self::$factory = new ConnectionFactory();
        return self::$factory;
    }

    private $db;

    public function getConnection() {
        if (!$this->db) {
            $this->db = new PDO("sqlite:tmp.db");
            //$this->db = new PDO("mysql:host=localhost;dbname=web290", 'root','root');
        }
        return $this->db;
    }
}

function getSomething()
{
    $conn = ConnectionFactory::getFactory()->getConnection();

}