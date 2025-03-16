<?php
// Define the correct username and password
$correct_username = "doctor";
$correct_password = "1234";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match
    if ($username === $correct_username && $password === $correct_password) {
        // Redirect to the dashboard page after successful login
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MediSync</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0;
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin: 0 auto;
        }

        h2 {
            color: #00796b;
            margin-bottom: 20px;
        }

        .logo {
            width: 80px;
            margin-bottom: 20px;
        }

        .textbox {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .textbox input {
            padding: 12px;
            border: 1px solid #00796b;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            outline: none;
            transition: border-color 0.3s;
        }

        .textbox input:focus {
            border-color: #004d40;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #004d40;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .footer {
            margin-top: 15px;
        }

        .footer a {
            color: #00796b;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }

            h2 {
                font-size: 22px;
            }

            .btn {
                 font-size: 16px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <img class="logo" src="medlogo.png" alt="Logo">
        <h2>Login to MediSync</h2>
        
        <!-- Display error message if credentials are incorrect -->
        <?php if (isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="textbox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="textbox" style="position: relative;">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <span class="eye-icon" id="toggle-password">
                    👁️
                </span>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="footer">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('toggle-password');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle the password visibility
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>

</body>
</html>
