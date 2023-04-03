<?php
  require_once "./vendor/autoload.php";
  $database = new Database;
  $photoPath = "";
if(isset($_POST["launchApp"])){
  $photoPath = "public/assets/img/" . $_FILES['appImage']['name'];
  move_uploaded_file($_FILES['appImage']['tmp_name'], $photoPath);
  $database->insertAdminApp($_POST["appName"],$_POST["appDesc"],$photoPath,$_POST["appDeveloper"],$_POST["appReview"],$_POST["appFilename"],$_POST["appId"]);
}
require_once "./application/views/admin.php";
?>
