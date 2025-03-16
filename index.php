<?php
// Define the correct username and password
$correct_username = "doctor";
$correct_password = "mediDOC";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match
    if ($username === $correct_username && $password === $correct_password) {
        // Redirect to the home page after successful login
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
    <title>Medicine Login</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Login Container */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background: #e8f0fe;
            width: 100%;
        }

        .login-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2a5db0;
        }

        .textbox {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .textbox input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 5px;
        }

        .textbox input:focus {
            outline: none;
            border-color: #2a5db0;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #2a5db0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #1e4780;
        }

        .footer {
            text-align: center;
            margin-top: 10px;
        }

        .footer a {
            color: #2a5db0;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .login-box {
                width: 90%;
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .btn {
                padding: 10px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            
            <!-- Display error message if credentials are incorrect -->
            <?php if (isset($error_message)) { ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php } ?>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
