<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Fetch counts
$customers_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as count FROM customers"))['count'];
$employees_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as count FROM employees"))['count'];
$products_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as count FROM products"))['count'];
$suppliers_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as count FROM suppliers"))['count'];
$orders_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as count FROM orders"))['count'];
?>
