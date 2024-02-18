
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px; /* Set the desired width of the frame */
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2em;
            width: 300px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #3b5998;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2d4373;
        }

        .password-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        #psw, #psw1 {
            padding-right: 40px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php

// Mock database (replace this with a real database)
$users_database = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate passwords
    if ($password !== $confirm_password) {
        die("Passwords do not match. Please try again.");
    }

    // Save user to database (replace this with database insertion code)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $users_database[] = [
        'fullname' => $full_name,
        'email' => $email,
        'password' => $hashed_password,
    ];

    // Redirect to login page or wherever you want
    header("Location: Login.php");
    exit();
}

?>
<div class="container">
    <h2>Registration Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="fullname">Enter your fullname</label>
        <input type="text" name="fullname" required><br>

        <label for="email">Enter your email</label>
        <input type="email" name="email" required><br>

        <label for="password">Enter your password</label>
        <input type="password" name="password" required><br>

        <label for="confirm_password">Confirm password</label>
        <input type="password" name="confirm_password" required><br>

        <input type="submit" value="Register">
</div>
    </form>
</body>
</html>
