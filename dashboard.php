<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediSync Dashboard</title>

    <!-- Link your CSS -->
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
            <li><a href="reports-analytics.php">Reports & Analytics</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
        <a href="logout.php" style="color:red;">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>MediSync Dashboard</h1>
        </div>

        <div class="dashboard-cards">
            <div class="card">
                <h3>Medicine Inventory</h3>
                <p>Manage and track medicines.</p>
            </div>
            <div class="card">
                <h3>Prescription Management</h3>
                <p>Handle prescriptions for patients.</p>
            </div>
            <div class="card">
                <h3>Orders & Supplier</h3>
                <p>Manage orders and suppliers.</p>
            </div>
            <div class="card">
                <h3>Reports & Analytics</h3>
                <p>Generate reports and analyze data.</p>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
