<?php
include 'src/data.php';
$cart->remove($_GET['id']);
$_SESSION['cart'] = serialize($cart);
header("Location: /index.php");