<?php
require_once 'Product.php';

class Sales implements JsonSerializable 
{
    // Properties
    private $productName;
    private $idProductOrdered;
    private $idProduct;
    private $quantity;
    private $productPrice;
    private $totalProductPrice;
    
    
    // SalesManagement constructor, takes in a dbConnect
    public function __construct($idProductOrdered,$idProduct,
     $quantity, $productPrice, $totalProductPrice, $productName)
    {
        $this->idProductOrdered = $idProductOrdered;
        $this->idProduct = $idProduct;
        $this->quantity = $quantity;
        $this->productPrice = $productPrice;
        $this->totalProductPrice = $totalProductPrice;
        $this->productName = $productName;
    }
    //Methid implemented from the JsonSerializable interface to translate our object into JSON
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
    
    //Method to grab the product name 
    public function getProductName($productID){
        
    }
    
}

