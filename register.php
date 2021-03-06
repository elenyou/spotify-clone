<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
    <title>Welcome to Spotify!</title>
</head>

<body>

<?php

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

?> 


    <div class="register-container">
        <div class="wrap-login">
            <div class="login-text">
                <h1>Get great music, right now</h1>
                <ul>
                    <li><i class="far fa-check-circle"></i>Discover music you'll fall in love with</li>
                    <li><i class="far fa-check-circle"></i>Create your own playlists</li>
                    <li><i class="far fa-check-circle"></i>Follow artists to keep up to date</li>
                </ul>
            </div>
            <form id="loginForm" action="register.php" method="POST" autocomplete="off">
                <h2 class="login-form-title">Login to your account</h2>
                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$loginFailed); ?>
                    <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" value="<?php getInputValue('username') ?>" autocomplete="off" required>
                </div>
                <div class="wrap-input">
                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" autocomplete="off" required>
                </div>
                <button class="login-form-btn" type="submit" name="loginButton">LOG IN</button>

                <div class="hasAccountText">
                    <span id="hideLogin">Don't have an account yet? Signup here.</span>
                </div>
            </form>
            <form id="registerForm" action="register.php" method="POST">
                <h2 class="login-form-title">Create your free account</h2>
                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                    <input id="username" name="username" type="text" placeholder="Username" value="<?php getInputValue('username') ?>" required>
                </div>

                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <input id="firstName" name="firstName" type="text" placeholder="First name" value="<?php getInputValue('firstName') ?>" required>
                </div>

                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <input id="lastName" name="lastName" type="text" placeholder="Last name" value="<?php getInputValue('lastName') ?>" required>
                </div>

                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <?php echo $account->getError(Constants::$emailTaken); ?>
                    <input id="email" name="email" type="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
                </div>

                <div class="wrap-input">
                    <input id="email2" name="email2" type="email" placeholder="Confirm email" value="<?php getInputValue('email2') ?>" required>
                </div>

                <div class="wrap-input">
                    <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                    <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                    <?php echo $account->getError(Constants::$passwordCharacters); ?>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                </div>

                <div class="wrap-input">
                    <input id="password2" name="password2" type="password" placeholder="Confirm password" required>
                </div>
                <button class="login-form-btn" type="submit" name="registerButton">SIGN UP</button>

                <div class="hasAccountText">
                    <span id="hideRegister">Already have an account? Log in here.</span>
                </div>
            </form>
        </div>
       
    </div>

    
</body>

</html>