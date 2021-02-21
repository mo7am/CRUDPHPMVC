<?php
include_once 'database.php'; 
include_once 'Product.php'; 



class Insert extends Product {
    
    public function fetchproduct($Product_id)
    {
//$output = array();
        $dat = new database();
 $query = "SELECT * FROM product WHERE product_id = '".$Product_id."'";
 
 $result = $dat->query($query);
 while($row = mysqli_fetch_array($result))
 {
  $output["category_id"] = $row["category_id"];
  $output["product_name"] = $row["product_name"];
  $output["product_price"] = $row["product_price"];
 }
 echo json_encode($output);
    }
}