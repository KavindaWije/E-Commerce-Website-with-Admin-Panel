<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
    <header>
        <h1>Your Shopping Cart</h1>
    </header>
    <div class="cart-container">
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                            <td>LKR <?php echo number_format($item['product_price'], 2); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>LKR <?php echo number_format($item['total_price'], 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
    <footer>
        <a href="homepage2.php">Continue Shopping</a>
    </footer>
</body>
</html>
