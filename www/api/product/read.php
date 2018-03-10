<?php
// headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include file encessari
include_once '../config/database.php';
include_once '../objects/product.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// inizializza oggetto
$product = new Product($db);
 
// query
$stmt = $product->read();
$num = $stmt->rowCount();
 
// Controllo se ci aono record
if($num>0){
 
    // products array
    $products_arr=array();
    $products_arr["products"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $product_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            "image_path" => $image_path
        );
 
        array_push($products_arr["products"], $product_item);
    }
    //ritorno i dati in json
    echo json_encode($products_arr);
}
 
else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>