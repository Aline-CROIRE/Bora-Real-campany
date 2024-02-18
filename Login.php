
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
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
$users_database = [
    // Sample user data (replace with data from your database)
    [
        'Fullname' => 'John Doe',
        'Email' => 'john@example.com',
        'password' => '$2y$10$A32vU98AvDxfIucmlE9q3eC4Zk44MhjA9PjY9q2NZQVBMCNWIfFQy', // Hashed password
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $password = $_POST['password'];

    // Check credentials (replace this with your actual authentication logic)
    foreach ($users_database as $user) {
        if ($user['Email'] == $email && password_verify($password, $user['password'])) {
            // Assign user role based on your criteria
            $user_role = determineUserRole($user); // Implement your own function to determine user role

            // Redirect to dashboard or wherever you want
            header("Location: Services.php?role=$user_role");
            exit();
        }
    }

    // Redirect back to login if credentials are not valid
    header("Location: Services.php");
    exit();
}

// Implement your own logic to determine user role based on your criteria
function determineUserRole($user) {
    // Sample logic: If email contains "admin", assign admin role, else assign user role
    if (strpos($user['email'], 'admin') !== false) {
        return 'admin';
    } else {
        return 'user';
    }
}

?>
<div class="container">

    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email</label>
        <input type="email" name="email" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>

</body>
</html>
