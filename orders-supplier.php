<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders & Supplier</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="medlogo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li><a href="medicine-inventory.php">Medicine Inventory</a></li>
            <li><a href="prescription-management.php">Prescription Management</a></li>
            <li><a href="orders-supplier.php" class="active">Orders & Supplier</a></li>
            <li><a href="reports-analytics.php">Reports & Analytics</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>Orders & Supplier</h1>
        </div>
        <div class="content">
            <h3>Manage Orders</h3>
            <!-- Table to manage orders and suppliers -->
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
