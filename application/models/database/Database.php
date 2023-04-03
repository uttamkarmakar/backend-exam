<?php
/**
 * Database - Contains all the methods which has to interact with the database
 * like insert,update,delete operations in the database.
 *
 * @author Uttam Karmakar
 * 
 * @method registartion()
 *  This method insert all the information entered by the user while registraring
 *  in the website like : Name,Emal,Password etc.
 * 
 * @method isExists()
 *  Checks whether a particular user is exists in the database or not.
 * 
 * @method CheckEmail()
 *  This method check an email is already exists in the database or not,if already
 * exists then that particular user has to register with another email Id.
 *  
 * @method updateUserPassword()
 *  Helps to update user password and that change will reflect in the database.
 * 
 * @method getAppItems()
 *  Fetches all the applications present in the database.
 * 
 * @method insertAdminApp()
 *  Stores the applications in the database from the admin side.
 * 
 * @method downloadApp()
 *  Fetches the impormation of downloaded app to show in the my apps page.
 */

class Database extends mysqli {
  private $conn;
  /**
   * Constructor to initialize the connection with the database.
   */
  public function __construct() {
    //For getting the configuration details of database.
    include "./config/config.php";
    $this->conn = new mysqli(hostName,user,password,databaseName);
  }
  
  /**
   * registartionI() - This method insert the user information in the database
   * 
   * @param string $firstName
   *  Stores the first name of the user.
   * @param string $lastName.
   *  Stores the last name of the user.
   * @param string $gender.
   *  Stores the gender of the user.
   * @param string $email.
   *  Stores email Id of the user.
   * @param string profilePhoto.
   *  Stores the path of the profile photo choosen by the user.
   * @param string $bio.
   *  Stores bio of the user as a string.
   * @param string $password
   *  Stores password as string.
   */

  public function registration(string $firstName, string $lastName, string $gender, string $email, string $profilePhoto,string $bio, string $password) {
    $sql = "INSERT INTO userInfo (first_name, last_name, gender, email, profile_photo, bio, password) 
    VALUES ('$firstName', '$lastName', '$gender', '$email', '$profilePhoto', '$bio', '$password')";
    $this->conn->query($sql);
    return $this->conn;
  }

  /**
   * This function checks whether a particular user is already present in the 
   * database or not.
   * 
   * @param string $email
   *  This variable stores the email Id to check that particular email is already
   *  present in the database.
   * @param string $password
   *  This variable stores the password corresponds to a particular email Id to
   * check a user information already exists in the database.
   * @return boolean
   *  If user information is already exists in the database it will return true
   *  otherwise it will return false.
   */

  public function isExists(string $email, string $password) {
    $sql = "select * from userInfo where email = '$email' and password = '$password'";
    if ($this->conn->query($sql)->num_rows != 0) {
      return true;
    } else {
      return false;
    }
  }
  /**
   * This function checks whether a particular email address is already registered
   * to the database or not.
   * 
   * @param string $email
   *  Stores the user email address to check that particular email Id already exists
   *  in the database
   * @return boolean
   *  Returns true if the email Id is already exists in the database otherwise it
   *  returns false.
   */
  public function checkEmail(string $email) {
    $sql = "select * from userInfo where email = '$email'";
    if ($this->conn->query($sql)->num_rows != 0) {
      return true;
    } else {
      return false;
    }
  }
  /**
   * This method fetches all the apps present in the admin database.
   * 
   * @return array
   */
  public function getAppItems(){
    $sql = "select * from apps";
    return ($this->conn->query($sql)->fetch_all(MYSQLI_ASSOC));
  }
  /**
   * This method helps to launch new app in the database from the admin side.
   * 
   * @param string $appName
   *  This variable stores the newly launched app name.
   * @param string $description
   *  This variable stores the description of the app.
   * @param string $image
   *  This variable stores the path of the image.
   * @param string $developer
   * Stores the developer name.
   * @param string $review
   *  Stores the review of a perticular application.
   * @param string $file
   *  Stores the filename in .apk format.
   * @parwam string $id
   * Stores the id of a application.
   * 
   * @return void 
   */
  public function insertAdminApp(string $appName, string $description,string $image,string $developer,string $review,string $file,int $id) {
    $sql = "INSERT INTO apps (app_name,Descroption,Image,Developer,review,file,id)
    VALUES ('$appName','$description','$image','$developer','$review','$file',$id);";
    $this->conn->query($sql);
  }
  /**
   * This method fetches the impormation of downloaded application.
   * 
   * @param int $appId
   *  Stores the application id.
   */
  public function downloadApp(int $appId){
    $sql = "select * from apps where id = $appId;";
    return ($this->conn->query($sql)->fetch_all(MYSQLI_ASSOC));
  }
}
