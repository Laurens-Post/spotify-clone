<?php
declare(strict_types=1);
if(isset($_POST['loginButton'])) {

    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username, $password);

    if($result == true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}