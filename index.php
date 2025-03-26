<?php
session_start();
require_once 'config/database.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>E-commerce Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <?php if(isset($_SESSION['user_id'])): ?>
            <a href="cart.php">Cart</a>
            <a href="logout.php">Logout</a>
            <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <h1>Welcome to our Store</h1>
        <!-- Featured products will go here -->
    </main>
</body>

</html>