<?php
  require "./vendor/autoload.php";
  $database = new Database;
  $appData = $database->getAppItems();
  require_once "./application/views/homepageView.php";
?>