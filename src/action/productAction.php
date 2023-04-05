<?php
session_start();
include_once("../classes/product.php");
$objProduct = new product($_SESSION['products']);
$arrProducts = ($objProduct->product_in_json_format());
// displaying the products on page load
foreach ($arrProducts as $productKey => $productValue) {
    echo "<div id='product-101' class='product'><img src='" . $arrProducts[$productKey]['image'] . "'><h3 class='title'><a href='#'>" . $arrProducts[$productKey]['name'] . "</a></h3><span>" . "$" . $arrProducts[$productKey]['price'] . "<input type='submit' class='add-to-cart' value='Add to Cart' onclick='addToCart(this.id)' id='" . $productKey . "'></div>";
}
?>