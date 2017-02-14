<?php
$projectName = "V'liVe";

$control = isset($_GET['control']) ? (string) $_GET['control'] : "c_home";

switch ($control) {
  case 'c_home':
    $control = "controllers/c_home.php";
    break;

  case 'c_credits':
    $control = "controllers/c_home.php";
    break;

  default:
    $control = "controllers/c_error.php";
    break;
}

var_dump($control);
