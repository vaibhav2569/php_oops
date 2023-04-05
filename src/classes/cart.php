<?php
session_start();
include_once("../Data/dataProducts.php");
class cart
{
    public $cart;
    function __construct($cart)
    {
        $this->cart = $cart;
    }
    // function to add a product to cart
    function addToCart($id)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['pprice'] += ($this->cart[$id]['pprice'] / $this->cart[$id]['pquantity']) * 1;
            $this->cart[$id]['pquantity'] += 1;

        } else {
            $this->cart[$id] = array(
                'pname' => $_SESSION['products'][$id]['name'],
                'pimage' => $_SESSION['products'][$id]['image'],
                'pquantity' => 1,
                'pprice' => $_SESSION['products'][$id]['price']
            );
        }
    }
    // function to remove an element from cart
    function removeProduct($id)
    {
        unset($this->cart[$id]);
    }
    // function to decrease the quantity of a product by one
    function decByOne($id)
    {
        $this->cart[$id]['pprice'] -= ($this->cart[$id]['pprice'] / $this->cart[$id]['pquantity']) * 1;
        $this->cart[$id]['pquantity']--;
        if ($this->cart[$id]['pquantity'] == 0) {
            unset($this->cart[$id]);
        }
    }
    // function to empty cart
    function emptyCart()
    {
        unset($this->cart);
    }
    // function to return the cart
    function getCart()
    {
        return $this->cart;
    }
}
?>