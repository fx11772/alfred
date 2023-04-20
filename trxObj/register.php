<?php
// Get the form data from the $_POST superglobal
$user_name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password using the password_hash() function
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database using PDO
require '../includes/db_connection.php';

// Prepare a SQL statement to insert a new record into the "users" table
$stmt = $pdo->prepare("INSERT INTO User (username, email, password, created_at) VALUES (:username, :email, :password, NOW())");

// Bind the parameters to the named placeholders in the SQL statement
$stmt->bindParam(':username', $user_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $hashed_password);

// Execute the SQL statement
$stmt->execute();

// Redirect the user to the login page
header('Location: ../pages/login-form.php');
exit();
?>





<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <?php require('pages/register-form.php'); ?>
</body>
</html>