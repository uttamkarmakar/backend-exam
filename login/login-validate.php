<?php
 include '../database/UserLogin.php';
 require 'login.php';
 $loginObj = new UserLogin;

 if(isset($_POST["login"])) {
    $temp = $loginObj->login($_POST['uemail'],($_POST['pass']));
    if($temp == TRUE){
        session_start();
        $_SESSION["logged"] = TRUE;
        header("location: ../assignment5/index.php");
    }
    else {
        $_SESSION["loginMessage"] = "Invalid username and password";
        header("location:login.php");
    }
 }
?>
