<?php
class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; // root for mac
    private $db_name = "the_company";
    protected $conn;

    public function __construct()
    {
        // instantiate 
        $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_name);

        // check if connection has error
        if($this->conn->connect_error)
        {
            die('Unable to connect to the database: '.$this->conn->connect_error);
        }   
    }

}