<?php
class Database{
 
    // credenziali db
    private $host = "db";
    private $db_name = "db_mysite";
    private $username = "root";
    private $password = "password";
    //private $port= "3306";
    public $conn;
 
    // connessione al DB
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=".$this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo("pdo conn mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name . " " . $this->username ." " . $this->password);
            echo "Connection error: " . $exception->getMessage();
            
        }
 
        return $this->conn;
    }
}
?>