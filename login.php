<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $manager_username = $_POST['manager_username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Manager WHERE Username = '$manager_username' AND Password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['manager_username'] = $manager_username;
        header("Location: menu.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: linear-gradient(to right, #FFA500, #FF6347); /* Orange gradient */
            background-image: url('img/img2.jpg'); /* Add your image path */
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            background-color: rgba(255, 165, 0, 0.5); /* Light overlay for the image */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9); /* Light transparent background for the form */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 2rem;
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 1rem;
            color: #555555;
            margin: 10px 0;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #FF6347; /* Focus border color */
            outline: none;
        }

        input[type="submit"] {
            background-color: #FF6347; /* Button color */
            color: #ffffff;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e53e3e; /* Button hover color */
        }

        p {
            text-align: center;
            color: #555555;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        a {
            color: #FF6347;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            form {
                padding: 20px;
                max-width: 90%;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Login</h1>
        <label for="manager_username">Username:</label>
        <input type="text" id="manager_username" name="manager_username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </form>
</body>
</html>
