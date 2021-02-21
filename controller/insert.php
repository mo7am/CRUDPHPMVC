<?php
//insert.php
include_once '../model/Insert.php'; 
include_once '../model/Product.php'; 
include_once '../model/Edit.php'; 
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $product = new Product();  
  $insert = new Insert();
  $product->category_id = $_POST["category_id"];
  $product->product_name = $_POST["product_name"];
  $product->product_price = $_POST["product_price"];
  
  $check = $insert->insertproduct($product);
  if($check)
  {
   echo 'Product Inserted';
  }  
 }
 
 if($_POST["operation"] == "Edit")
 { 
  $product = new Product();  
  $edit = new Edit();
  $product->category_id = $_POST["category_id"];
  $product->product_name = $_POST["product_name"];
  $product->product_price = $_POST["product_price"];
  $product->product_id = $_POST["product_id"];
  $check = $edit->editproduct($product);
  if($check)
  {
   echo 'Product Updated';
  }
 }

}
?>