<?php
 require_once "./vendor/autoload.php";
 $loginObj = new UserLogin;

 if(isset($_POST["login"])) {
    $temp = $loginObj->login($_POST['uemail'],($_POST['pass']));
    if($temp == TRUE){
        session_start();
        $_SESSION["logged"] = TRUE;
        header("location: /home");
    }
    else {
        $_SESSION["loginMessage"] = "Invalid username and password";
        header("location:login");
    }
 }
 require_once "./application/views/loginView.php";
?>

