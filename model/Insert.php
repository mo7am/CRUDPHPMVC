<?php
include_once 'database.php'; 
include_once 'Product.php'; 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Insert extends Product {
    
    public function insertproduct(Product $S)
    {
         $dat = new database();
             $data['category_id'] = $S->category_id;
             $data['product_name'] = $S->product_name;
             $data['product_price'] = $S->product_price;
             $data['product_image'] = $S->product_image;
      
             
         $dat->insert('product', $data); 
        
    }
    
    
}
