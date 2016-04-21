<?php
include 'model/Product.php';
include 'model/Warehouse.php';
include 'model/Cart.php';
session_start();
$warehouse = new Warehouse();
$warehouse->add(new Product(0, 'nokia', 10, '/src/image/canon.jpg'));
$warehouse->add(new Product(1, 'nokia2', 13, '/src/image/computer.jpg'));
$warehouse->add(new Product(2, 'nokia3', 106, '/src/image/laptop.jpg'));
if (!isset($_SESSION['cart'])) {
    $cart = new Cart();
    $_SESSION['cart'] = serialize($cart);
} else {
    $cart = unserialize($_SESSION['cart']);
}