<?php
$username = "Jseo123";
$password = "12345";
session_start();
$user = $_POST["fuser"];
$pass = $_POST["pass"];
if($username === $user && $pass === $password){
    header("Location: http://localhost/phppractice/dashboard.php");
} else {
    header("Location: http://localhost/phppractice/index.php");
};