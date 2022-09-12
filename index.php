<?php

class e_commerce 

{
   public $product;
   public $user;
   
   public function __construct($product, $user)
   {
    $this->product = $product;
    $this->user = $user;
   }
}

?>