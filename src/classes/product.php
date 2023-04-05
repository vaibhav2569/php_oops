<?php
session_start();
include_once("../Data/dataProducts.php");
class product
{
    public $products;
    // constructor to initialize the object of the class
    function __construct($products)
    {
        $this->products = $products;
    }
    // function to return the products 
    function product_in_json_format()
    {
        return $this->products;
    }
}
?>