<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}

// Handle add, edit, delete actions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        mysqli_query($connect, "INSERT INTO customers (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')");
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        mysqli_query($connect, "UPDATE customers SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id");
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        mysqli_query($connect, "DELETE FROM customers WHERE id=$id");
    }
}

// Fetch customers
$customers = mysqli_query($connect, "SELECT * FROM customers");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Customers</title>
</head>
<body>
    <h2>Manage Customers</h2>
    <form method="POST" action="">
        <input type="hidden" name="id">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Phone:</label>
        <input type="text" name="phone" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <button type="submit" name="add">Add Customer</button>
        <button type="submit" name="edit">Edit Customer</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($customer = mysqli_fetch_assoc($customers)) { ?>
                <tr>
                    <td><?php echo $customer['name']; ?></td>
                    <td><?php echo $customer['email']; ?></td>
                    <td><?php echo $customer['phone']; ?></td>
                    <td><?php echo $customer['address']; ?></td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                        <button onclick="fillEditForm(<?php echo $customer['id']; ?>, '<?php echo $customer['name']; ?>', '<?php echo $customer['email']; ?>', '<?php echo $customer['phone']; ?>', '<?php echo $customer['address']; ?>')">Edit</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        function fillEditForm(id, name, email, phone, address) {
            document.querySelector('input[name="id"]').value = id;
            document.querySelector('input[name="name"]').value = name;
            document.querySelector('input[name="email"]').value = email;
            document.querySelector('input[name="phone"]').value = phone;
            document.querySelector('input[name="address"]').value = address;
        }
    </script>
</body>
</html>
