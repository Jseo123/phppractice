<?php

function login(){
    session_start();
    $_SESSION["user"] = $_POST["fuser"];
$_SESSION["pass"] = $_POST["pass"];
$username = "Jseo123";
$password = "123456";



    if ($_SESSION["user"] === $username && $password === $_SESSION["pass"]){
        header("Location: http://localhost/phppractice/dashboard.php ");
    } else {
        header("Location: http://localhost/phppractice/index.php");
    }
    
};

function destroyLogin(){
    session_start();
    unsetSe();
    session_destroy();
    header("Location: http://localhost/phppractice/index.php");
};

function unsetSe(){
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
};

function checkSession() {
    session_start();
    if(isset($_SESSION["user"])){
        echo "Is Set";
    } else {
        echo "It is not set";
    }
};