<?php

// Get the form data from the $_POST superglobal
$user_name = $_POST['username'];
$user_password = $_POST['password'];

// Connect to the database using PDO
require_once '../includes/db_connection.php';
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Prepare a SELECT statement to retrieve the user with the provided username
$stmt = $dbh->prepare("SELECT * FROM User WHERE username = :username LIMIT 1");
$stmt->bindParam(':username', $user_name);
$stmt->execute();

// Fetch the row from the result set
$user = $stmt->fetch();

// Verify that the password provided matches the hashed password in the database
if (password_verify($user_password, $user['password'])) {
    // Password is correct, redirect the user to the home page
    header('Location: ../pages/home/home.php');
    exit();
} else {
    // Password is incorrect, display an error message
    echo "Incorrect username or password.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
</head>
<body>
  <?php require('../pages/login/login-form.php'); ?>
</body>
</html>