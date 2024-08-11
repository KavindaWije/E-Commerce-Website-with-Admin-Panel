<?php
session_start();

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$quantity = $_POST['quantity'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$found = false;

foreach ($_SESSION['cart'] as &$item) {
    if ($item['product_id'] == $product_id) {
        $item['quantity'] += $quantity;
        $item['total_price'] = $item['product_price'] * $item['quantity'];
        $found = true;
        break;
    }
}

if (!$found) {
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
        'quantity' => $quantity,
        'total_price' => $product_price * $quantity
    ];
}

echo json_encode($_SESSION['cart']);
?>
