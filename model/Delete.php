<?php
include_once 'database.php'; 
class Delete {
    
    public function deleteproduct($id)
    {
        $dat = new database();
        
        $dat->delete("product", "product_id = '$id'");
        
    }
    
    
}