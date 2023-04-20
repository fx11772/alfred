<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <title>Register</title>
</head>
<body>
<form action="../trxObj/register.php" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" value="">

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" value="">

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" value="">

  <button type="submit">Register</button>
  <button class="back-btn" onclick="goBack()"></button>
</form>
</body>
</html>