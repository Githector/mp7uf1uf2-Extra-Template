<?php

class Conex
{
    private $host;
    private $db;
    private $dsn;
    private $user;
    private $pass;
    public $conexio;

    public function __construct()
    {
        $this->host = 'mysql';
        $this->db = "daw_db";
        $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';';
        $this->user = 'hector';
        $this->pass = "12345678";
    }

    public function openConnection()
    {
        try {
            $this->conexio = new PDO($this->dsn, $this->user, $this->pass);
            //echo 'Connexio ok<br>';
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }
    }


    public function closeConnection()
    {
        try {
            $this->conexio=null;
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }
    }



}