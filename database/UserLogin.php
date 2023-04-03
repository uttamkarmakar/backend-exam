<?php
include 'UserRegistration.php';
class UserLogin
{
  public function login(string $email, string $password)
  {
    include 'Connections.php';

    $result = mysqli_query($conn, "select * from " . UserRegistration::TABLE_NAME . " where userEmail ='$email';");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
      if ($password === ($row['userPassword'])) {
        return TRUE;
      }
    }
    return FALSE;
  }
}
