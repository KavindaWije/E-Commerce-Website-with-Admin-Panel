<?php
session_start();

$product_id = $_POST['product_id'];

foreach ($_SESSION['cart'] as $key => $item) {
    if ($item['product_id'] == $product_id) {
        unset($_SESSION['cart'][$key]);
        break;
    }
}

$_SESSION['cart'] = array_values($_SESSION['cart']);
echo json_encode($_SESSION['cart']);
?>
