<?php

session_start();

$user_password = strtolower($_POST["password"]);

if (empty($user_password)) {
    $_SESSION["message"] = "Wprowadź dane!";
    header("location: ../password.php");
    die();
}
else {

    if ($user_password == "query") {
        $_SESSION["success"] = "Brawo! Udało ci się uciec!";
    }
    else {
        $_SESSION["message"] = "Spróbuj ponownie!";
    }

    header("location: ../password.php");
    die();
}