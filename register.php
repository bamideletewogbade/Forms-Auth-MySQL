<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="main">
<h1>👋 Hello</h1>
<br>
<h2>Create an account.</h2>
<br>
    <form action="register_process" method="POST" autocomplete="off">
        Username: <input type="text" name="username" placeholder="Enter username">
        <br>
        <br>
        Password: <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        Confirm Password: <input type="password" name="c_password" placeholder="Confirm password">
        <br>
        <br>
        <input type="submit" name="submit" value="Register">
        <br> 
        <p>Already registered? <strong><a href="login.php">Login</a></strong></p>

    </form>
</body>
</html>