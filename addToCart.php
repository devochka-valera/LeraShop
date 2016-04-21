<?php
include 'src/data.php';
$productId = $_GET['id'];
$product = $warehouse->takeAway($productId);


$cart->add($product);
$_SESSION['cart'] = serialize($cart);
header("Location: /index.php");