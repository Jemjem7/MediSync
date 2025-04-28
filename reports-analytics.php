<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports & Analytics</title>
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
            <li><a href="orders-supplier.php">Orders & Supplier</a></li>
            <li><a href="reports-analytics.php" class="active">Reports & Analytics</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>Reports & Analytics</h1>
        </div>
        <div class="content">
            <h3>View Reports</h3>
            <!-- Generate reports and analytics here -->
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
