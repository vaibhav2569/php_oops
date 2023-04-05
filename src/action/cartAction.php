<?php
session_start();
include_once("../classes/cart.php");
include_once("../Data/dataProducts.php");
// creating an object of class cart
$objCart = new cart($_SESSION['cart']);
// calling functions using switch case
switch ($_POST['action']) {
    case "removeProduct":
        $objCart->removeProduct($_POST['id']);
        break;
    case "addToCart":
        $objCart->addToCart($_POST['id']);
        break;
    case "decByOne":
        $objCart->decByOne($_POST['id']);
        break;
    case "emptyCart":
        $objCart->emptyCart();
        break;
}
$cartNew = $objCart->getCart();
$_SESSION['cart'] = $cartNew;
display();
// function to display the cart
function display()
{
    $str = "";
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productKey => $productValue) {
            $str .= "<tr><td><img src='" . $_SESSION['cart'][$productKey]['pimage'] . "'></td><td>" . $_SESSION['cart'][$productKey]['pname'] . "</td><td><button id='" . $productKey . "' onclick='decByOne(this.id)'>-</button>" . $_SESSION['cart'][$productKey]['pquantity'] . "<button id='" . $productKey . "' onclick='addToCart(this.id)'>+</button></td><td>$" . $_SESSION['cart'][$productKey]['pprice'] . "</td><td><input type='submit' class='remove' value='Remove' onclick='removeProduct(this.id)' id='" . $productKey . "'></td></tr>";
            $total += $_SESSION['cart'][$productKey]['pprice'];
        }

        if ($total > 0) {
            $str .= "<tr><td colspan=3><h3><b>Total Amount</h3><b></td><td><h3><b>$" . $total . "</b></h3></td><td><button onclick='emptyCart()'>Empty Cart</button></td></tr>";
        }
        echo $str;
    }
}
?>