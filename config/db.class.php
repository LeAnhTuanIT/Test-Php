<?php

class Db
{
    // Biến kết nối CSDL
    protected static $connection;

    // Hàm khởi tạo
    public function __construct()
    {

        $config = parse_ini_file("config.ini");

        self::$connection = new mysqli(
            $config["host"],
            $config["username"],
            $config["password"],
            $config["databasename"]
        );

        if (self::$connection->connect_error) {
            die ("Kết nối CSDL thất bại: " . self::$connection->connect_error);
        }
    }


    public function connect()
    {

        return self::$connection;
    }


    public function query_execute($queryString)
    {

        $connection = $this->connect();


        $result = $connection->query($queryString);


        $connection->close();


        return $result;
    }


    public function select_to_array($queryString)
    {

        $rows = array();


        $result = $this->query_execute($queryString);


        if ($result === false) {
            return false;
        }


        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }


        return $rows;
    }
}