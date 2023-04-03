<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];
$url = rtrim($url);
switch ($url) {
  case '/home':
    require_once "application/controllers/homepage.php";
    break;
  case '/login':
    require_once "application/controllers/login.php";
    break;
  case '/':
    require_once "application/controllers/login.php";
    break;
  case '/signup':
    require_once "application/controllers/signup.php";
    break;
  case '/admin':
    require_once "application/controllers/admin.php";
    break;
  case '/myapps':
    require_once "application/controllers/myapps.php";
    break;
  default:
    require_once "application/controllers/login.php";
}
