<?php

namespace model;

class DBConnect
{
    private string $dns;
    private string $username;
    private string $password;

    public function __construct()
    {

        $this->dns = "mysql:host=localhost;dbname=city_manager";
        $this->username = "root";
        $this->password = "";
    }

    function connect()
    {
        $conn = null;
        try {
            $conn = new \PDO ($this->dns, $this->username, $this->password);
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
        return $conn;
    }
}