<?php
class Product{
 
    // connessione al database e nome tabella
    private $conn;
    private $table_name = "products";
 
    // object properties
    public $id;
    public $name;
    public $description;
    public $image_path;
    
 
    // ccostruttori per connessione a db
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function read(){
 
    // select all query
    $query = "SELECT
                p.id, p.name, p.description, p.image_path
            FROM
                " . $this->table_name . " p
            ORDER BY
                p.id DESC";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // esegui query
    $stmt->execute();
 
    return $stmt;
}
}
