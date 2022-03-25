<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Kundenportal</title>
</head>
<body>
    <section class="mainSec">
        <img class="logo" src="images/nasa_logo.png" alt="LOGO">
        <h1 class="logoTitle">Portal</h1>
        <form id="loginForm" action="/login.php" method="POST">
            <h1>Login</h1>
            <label class="loginLabel" for="username">Username</label>
            <input class="loginInput" type="text" name="username">
            <label class="loginLabel" for="password">Password</label>
            <input class="loginInput" type="text" name="password">  
            <input type="submit" name="loginSubmit" value="Login">          
        </form>
    </section>
</body>
</html>