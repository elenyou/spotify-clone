<?php
	include("includes/classes/Account.php");

	$account = new Account();
	$account->register();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="inputContainer">
        <form action="register.php" method="POST" id="loginForm">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="your login" requared>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" requared>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>
    </div>

    <div id="inputContainer">
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
            </p>
            <p>
                <label for="firstName">First name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
            </p>
            <p>
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Your password" required>
            </p>
            <p>
                <label for="password2">Confirm password</label>
                <input id="password2" name="password2" type="password" placeholder="Your password" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>

</html>