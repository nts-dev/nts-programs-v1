<?php

use auth\AuthenticationServiceImpl;

include('auth.php');

$service = new AuthenticationServiceImpl();

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userId = $_POST["trainee"];
    // Validate username
    if (empty(trim($_POST["trainee"])))
        $username_err = "Please enter a username.";
    elseif (empty(trim($_POST["identifier"])))
        $password_err = "Please enter a password.";
    else {

        if (isset($_SESSION['ERRORS']))
            unset($_SESSION["ERRORS"]);

        $isAuthenticated = $service->authenticateClient(
            filter_input(INPUT_POST, 'trainee', FILTER_SANITIZE_NUMBER_INT),
            filter_input(INPUT_POST, 'identifier', FILTER_SANITIZE_STRING)
        );

        if (!$isAuthenticated || isset($_SESSION['ERRORS'])) {
            $login_err = unserialize($_SESSION['ERRORS']);
            echo $login_err;
            header("location: " . WEBURL . Boot::WWWROOT);
            die();
        }

        header("location: index.php");

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>

    <?php
    CSSPackage::BOOTSTRAP();
    CSSPackage::FONTAWESOME();

    JSPackage::BOOTSTRAP();
    JSPackage::JQUERY();

    ?>

    <style>
        .container {
            border: 1px solid lightgrey;
            text-align: center;
            height: 300px;
            width: 400px;
            border-radius: 4px;
        }

        body {
            padding: 70px;
        }

        .input-group-text {
            height: 100% !important;
        }

        h1 {
            margin: auto;
        }

        .row {
            height: 50px;
            width: 396px;
        }

        .login-text {
            padding-top: 22px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row login-text">
        <h3><i class="fa fa-lock" aria-hidden="true"></i> Login</h3>
    </div>
    <br/><br/>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
            </div>
            <input
                    type="text"
                    name="trainee"
                    class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $username; ?>"
                    placeholder="username"/>
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key icon"></i></span>
            </div>
            <input type="Password" name="identifier"
                   class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $password; ?>"
                   placeholder="password"/>
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Login</button>
    </form>
</div>
</body>
</html>