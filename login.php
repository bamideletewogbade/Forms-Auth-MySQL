<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<form action="register_process" method="POST" autocomplete="off">
        Username: <input type="text" name="username" placeholder="Enter username">
        <br>
        <br>
        Password: <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        <input type="submit" name="submit" value="Login">
        <br>
        <br>
        <p>Forgot your password? <a href="reset_password.php"><strong>Reset Password</strong></a></p>
        <p>Not yet registered? <a href ="register.php"><strong>Register here</strong></a></p>
</form>
</body>
</html>