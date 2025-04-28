<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Management</title>
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
            <li><a href="prescription-management.php" class="active">Prescription Management</a></li>
            <li><a href="orders-supplier.php">Orders & Supplier</a></li>
            <li><a href="reports-analytics.php">Reports & Analytics</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>Prescription Management</h1>
        </div>
        <div class="content">
            <h3>Manage Prescriptions</h3>
            <!-- Add Prescription Form / Table for managing prescriptions -->
            <form action="process-prescription.php" method="POST">
                <label for="medicine-name">Medicine Name:</label>
                <input type="text" id="medicine-name" name="medicine-name" required>
                <label for="patient-name">Patient Name:</label>
                <input type="text" id="patient-name" name="patient-name" required>
                <label for="dose">Dose:</label>
                <input type="text" id="dose" name="dose" required>
                <button type="submit">Submit Prescription</button>
            </form>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
