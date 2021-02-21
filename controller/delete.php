<?php
//delete.php
include_once '../model/Delete.php'; 
if(isset($_POST["product_id"]))
{
    
    $delete = new Delete();
    $product_id = $_POST["product_id"];
   $check =  $delete->deleteproduct($product_id);
 if($check)
 {
  echo 'Data Deleted';
 }
}
?>
