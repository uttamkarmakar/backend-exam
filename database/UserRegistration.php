<?php

class UserRegistration
{ 
  public $passwordErr = "";
  const TABLE_NAME =  'userInfo';
  
  public function registration($user, $email,$password, $confirmPassword, $token)
  {
    include 'Connections.php';

    $duplicate = mysqli_query($conn, "select * from " . UserRegistration::TABLE_NAME . " where userName = '$user' or userEmail = '$email';");
    
    if (mysqli_num_rows($duplicate) > 0) {

      return "username or email already taken";

    } elseif ($password === $confirmPassword) {

      $query = "insert into " . UserRegistration::TABLE_NAME . " values('$user','$email','$password','$token')";
      mysqli_query($conn, $query);

      return TRUE;
    }
      return "password does not match";
  }

  public function isValidPass(string $password) {

    $uppercase    = preg_match('@[A-Z]@', $password);
    $lowercase    = preg_match('@[a-z]@', $password);
    $number       = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      return "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'";
      return false;
    } 
      return TRUE;
  }
}



