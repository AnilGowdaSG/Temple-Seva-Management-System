<?php
session_start();
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mid = $_POST['ManagerID'];
    $manager_name = $_POST['ManagerName'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $contact_number = $_POST['ContactNumber'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];

    if (!empty($username) && !empty($password) && !empty($email) && !empty($address)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO Manager (ManagerID, ManagerName, ContactNumber, Email, Address, Username, Password) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssss", $mid, $manager_name, $contact_number, $email, $address, $username, $password);

        if ($stmt->execute()) {
            header("Location: login.php"); // Redirect to login page after successful signup
            die;
        } else {
            echo "<script type='text/javascript'>alert('Error: Unable to create account. Please try again.')</script>";
        }

        $stmt->close();
    } else {
        echo "<script type='text/javascript'>alert('Please enter all required fields.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Signup Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #FFD699;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 900px;
        }

        h1 {
            font-size: 2rem;
            color: #FF6347;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-row .form-column {
            width: 48%;
        }

        label {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #555;
        }

        input[type="submit"] {
            background-color: #FF6347;
            color: white;
            border: none;
            padding: 15px;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #FF4500;
        }

        p {
            margin-top: 15px;
            color: #555;
            font-size: 0.9rem;
            text-align: center;
        }

        a {
            color: #FF6347;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }

            .form-row .form-column {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Manager Sign Up</h1>

        <div class="form-row">
            <div class="form-column">
                <label for="ManagerID">Manager ID:</label>
                <input type="number" id="ManagerID" name="ManagerID" required><br>

                <label for="ManagerName">Manager Name:</label>
                <input type="text" id="ManagerName" name="ManagerName" required><br>

                <label for="Username">Username:</label>
                <input type="text" id="Username" name="Username" required><br>
            </div>

            <div class="form-column">
                <label for="ContactNumber">Contact Number:</label>
                <input type="tel" id="ContactNumber" name="ContactNumber" required><br>

                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" required><br>

                <label for="Address">Address:</label>
                <input type="text" id="Address" name="Address" required><br>
            </div>
        </div>

        <label for="Password">Password:</label>
        <input type="password" id="Password" name="Password" required><br>

        <input type="submit" value="Submit">

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>
</html>
