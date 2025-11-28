<?php

namespace App\Request;
use mysqli;

class Connection
{
    private mysqli $connection; private string $username = 'root';
    private string $password = ''; private string $database = 'api';
    private string $host = 'localhost';
    public static function request($data)
    {
        return $data;
    }

    public function __construct()
    {
        $this->connection = new mysqli($this->host,$this->username, $this->password, $this->database);
    }

    public function Query($sql,$parameters=[])
    {
         $stmt = $this->connection->prepare($sql);

        if($stmt === false){
            exit();
        }

        if(!empty($parameters)){
            $types = str_repeat('s', count($parameters));
            $stmt->bind_param($types, ...$parameters);
        }

        $stmt->execute();

        $result = $stmt->get_result();

        return $result ? $result : $stmt;
    }

}
