<?php


if (!empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $isLoggedIn = false;
    if ($username == 'admin123@gmail.com' && $password == '123456') {
        $isLoggedIn = true;
    }
    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        header("Location: ./sign-in.php");
        exit();
       
    } else {
        $_SESSION["user_id"] = 'admin';
        header("Location: ./index.php");
        exit();
    }

    

}