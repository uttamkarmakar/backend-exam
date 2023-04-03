<?php
session_start();
require '../database/UserRegistration.php';
require '../validations.php';
$registerObj = new UserRegistration;

if(isset($_POST["submit"])) {

  $result = $registerObj->isValidPass($_POST['password']);
  
  if($result === TRUE){
    $token = bin2hex(random_bytes(15));
    $result = $registerObj->registration($_POST['username'],$_POST['email'],$_POST['password'],$_POST['cpassword'],$token);
    
    if($result == TRUE){
      $_SESSION["successMsg"] = "Registration was successful,Please login now";
      header("location:login.php");
    }else{
      $_SESSION["fromMessage"] = $result;
    }
  }

  else {
    $_SESSION["fromMessage"] = $result;
  }
}