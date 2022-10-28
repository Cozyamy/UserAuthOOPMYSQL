<?php
class Dbh {
    protected $host = "127.0.0.1";
    protected $user = "root";
    protected $db = "zuriphp";
    protected $password = "";

    protected function connect() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
      
        return $this->conn = $conn;
    }
}