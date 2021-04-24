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
<h1>👋 Hello, Welcome to the Zuri Assignment Auth Page</h1>
<br>
<h2>Create an account.</h2>
<br>
    <form action="register_process" method="POST">
        Username: <input type="text" name="username" placeholder="Enter username" required="" autocomplete="off">
        <br>
        <br>
        Password: <input type="password" name="password" placeholder="Enter password" required="" autocomplete="off">
        <br>
        <br>
        Confirm Password: <input type="password" name="c_password" placeholder="Confirm password" required="" autocomplete="off">
        <br>
        <br>
        <input class="btn btn-block btn-primary" type="submit" name="submit" value="Register">
        <br> 
        <p>Already registered? <strong><a style="color: blue" href="login.php">Login</a></strong></p>

    </form>
</body>
</html>