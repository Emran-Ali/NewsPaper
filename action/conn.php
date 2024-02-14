<?php
class connection
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "newspaper";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "<script> console.log('Connected successfully')</script>";
        // echo "Ok ..... Coneccted";
    }

    // public $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

}
