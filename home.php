<?php
// Start the session
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Dummy medicine data (this can later be replaced with a database query)
$medicines = [
    ['name' => 'Aspirin', 'quantity' => 100, 'price' => 20],
    ['name' => 'Paracetamol', 'quantity' => 200, 'price' => 10],
    ['name' => 'Ibuprofen', 'quantity' => 150, 'price' => 15]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: white;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        .add-medicine-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            width: 150px;
        }

        .add-medicine-btn:hover {
            background-color: #45a049;
        }

        .logout-btn {
            display: block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
            width: 150px;
            margin-left: auto;
            margin-right: auto;
        }

        .logout-btn:hover {
            background-color: #e53935;
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
            }
            table, th, td {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Medicine Dashboard</h1>

        <h2>Medicine Inventory</h2>
        <table>
            <tr>
                <th>Medicine Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <?php foreach ($medicines as $medicine): ?>
            <tr>
                <td><?php echo $medicine['name']; ?></td>
                <td><?php echo $medicine['quantity']; ?></td>
                <td>$<?php echo number_format($medicine['price'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <button class="add-medicine-btn">Add Medicine</button>
        <a href="index.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
