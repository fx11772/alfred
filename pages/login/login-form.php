<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
  <title>Login</title>
</head>
<body>
<form action="../../trxObj/login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" value="">

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" value="">

  <button class="btn" type="submit">Log In</button>
  <button class="btn back" type="button" onclick="window.location.href='register-form.php'">Register</button>
</form>
</body>
</html>