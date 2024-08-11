<?php
session_start();

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

foreach ($_SESSION['cart'] as &$item) {
    if ($item['product_id'] == $product_id) {
        $item['quantity'] = $quantity;
        $item['total_price'] = $item['product_price'] * $quantity;
        break;
    }
}

echo json_encode($_SESSION['cart']);
?>
