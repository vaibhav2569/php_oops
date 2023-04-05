<?php
session_start();
// declaring the products array and cart array in session
$products = array(
    '0' => array("id"=> 101, "name"=> "Basket Ball", "image"=> "/images/basketball.png", "price"=> 150),
    '1' => array("id"=> 102, "name"=> "Football", "image"=> "/images/football.png", "price"=> 120),
    '2' => array("id"=> 103, "name"=> "Soccer", "image"=> "/images/soccer.png", "price"=> 110),
    '3' => array("id"=> 104, "name"=> "Table Tennis", "image"=> "/images/table-tennis.png", "price"=> 130),
    '4' => array("id"=> 105, "name"=> "Tennis", "image"=> "/images/tennis.png", "price"=> 100)
);
if(!isset($_SESSION['products'])){
    $_SESSION['products'] = $products;
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
?>


