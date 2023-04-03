<?php
  require_once "./vendor/autoload.php";
  $database = new Database;
  $downloadedApp = $database->downloadApp($_REQUEST["card_one"]);
  require_once "./application/views/myappsView.php";
?>
