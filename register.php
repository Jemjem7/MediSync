<?php
session_start();

// Handle register form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    if (!empty($username) && !empty($password)) {
        // Save user to a JSON file
        $users = file_exists('users.json') ? json_decode(file_get_contents('users.json'), true) : [];

        if (isset($users[$username])) {
            $error = "Username already exists!";
        } else {
            $users[$username] = $password;
            file_put_contents('users.json', json_encode($users));
            header('Location: index.php');
            exit();
        }
    } else {
        $error = "Please fill all fields!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - MediSync</title>
</head>
<body>
    <h2>Register</h2>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="index.php">Login here</a></p>
</body>
</html>
