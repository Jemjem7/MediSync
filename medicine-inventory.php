<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Inventory</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="medlogo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li><a href="medicine-inventory.php" class="active">Medicine Inventory</a></li>
            <li><a href="prescription-management.php">Prescription Management</a></li>
            <li><a href="orders-supplier.php">Orders & Supplier</a></li>
            <li><a href="reports-analytics.php">Reports & Analytics</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>Medicine Inventory</h1>
        </div>
        <div class="content">
            <h3>Medicine List</h3>
            <table>
                <tr>
                    <th>Medicine Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Supplier</th>
                </tr>
                <tr>
                    <td>Paracetamol</td>
                    <td>100</td>
                    <td>$20</td>
                    <td>Pharma Inc.</td>
                </tr>
                <tr>
                    <td>Aspirin</td>
                    <td>50</td>
                    <td>$15</td>
                    <td>MedSupply</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
