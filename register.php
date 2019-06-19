<?php
declare(strict_types=1);
include ("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
    $account = new Account($con);

include("handlers/register-handler.php");
include("handlers/login-handler.php");

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST{$name};
    }
}
?>

<html>
<head>
    <title>Register at Post-ify</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/register.js"></script>
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
    else '<script>
            $(document).ready(function() {
               $("#loginForm").show();
               $("#registerForm").hide();
            });
        </script>';
?>

    <div id="background">
        <div id="loginContainer">
            <div id="inputContainer">
                <form id="loginForm" action="register.php" method="POST">
                    <h2>Login to your account!</h2>
			<p>Gebruikersnaam: test</p>
			<p>Wachtwoord: test1234</p>
                    <p>
                        <?php echo $account->getError(Constants::$loginFailed) ?>
                        <label for="loginUsername">Username</label>
                        <input id="loginUsername" name="loginUsername" type="text" value="<?php getInputValue('loginUsername') ?>" placeholder="Username..." required />
                    </p>
                    <p>
                        <label for="loginPassword">Password</label>
                        <input id="loginPassword" name="loginPassword" type="password" placeholder="Password..." required />
                    </p>
                    <button type="submit" name="loginButton">Login</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>
                    </div>

                </form>


                <form id="registerForm" action="register.php" method="POST">
                    <h2>Register a new account!</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharacters) ?>
                        <?php echo $account->getError(Constants::$usernameTaken) ?>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="Username..." value="<?php getInputValue('username') ?>" required />
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstNameCharacters) ?>
                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="Name..." value="<?php getInputValue('firstName') ?>" required />
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$lastNameCharacters) ?>
                        <label for="lastName">Last name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="Last name..." value="<?php getInputValue('lastName') ?>" required />
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$emailsDoNotMatch) ?>
                        <?php echo $account->getError(Constants::$emailInvalid) ?>
                        <?php echo $account->getError(Constants::$emailTaken) ?>
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="text" placeholder="Email..." value="<?php getInputValue('email') ?>" required />
                    </p>

                    <p>
                        <label for="email2">Confirm E-mail</label>
                        <input id="email2" name="email2" type="text" placeholder="Confirm email..." value="<?php getInputValue('email2') ?>" required />
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordsDoNotMatch) ?>
                        <?php echo $account->getError(Constants::$passwordsNotAlphanumeric) ?>
                        <?php echo $account->getError(Constants::$passwordCharacters) ?>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="Password..." value="<?php getInputValue('password') ?>" required />
                    </p>

                    <p>
                        <label for="password2">Confirm Password</label>
                        <input id="password2" name="password2" type="password" placeholder="Confirm password..." value="<?php getInputValue('password2') ?>" required />
                    </p>
                    <button type="submit" name="registerButton">Register Account</button>

                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Login here.</span>
                    </div>

                </form>
            </div>

            <div id="loginText">
                <h1>Post-ify (Free spotify)</h1>
                <h2>Want all the benefits of spotify for free? Try Post-ify</h2>
                <ul>
                    <li>
                        No memberships needed
                    </li>
                    <li>
                        All features are free to use
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
