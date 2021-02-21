<?php
include_once '../model/Fetch_single.php'; 
include_once '../model/Product.php'; 
//fetch_single.php
if(isset($_POST["product_id"]))
{
 $product = new Product(); 
 $fetch_single = new Fetch_single(); 
 
 $product_id = $_POST["product_id"];
 $fetch_single->fetchproduct($product_id);
}

?>
