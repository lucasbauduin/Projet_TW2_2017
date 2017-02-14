<?php
$projectName = "V'liVe";

$control = isset($_GET['control']) ? (string) $_GET['control'] : "c_home";

switch ($control) {
  case 'c_home':
    $pageTitle = "Accueil";
    $control = "controllers/c_home.php";
    break;

  case 'c_credits':
    $pageTitle = "Crédits";
    $control = "controllers/c_credits.php";
    break;

  default:
    $pageTitle = "Oops, il y a un problème !";
    $control = "controllers/c_error.php";
    break;
}

require_once 'views/v_head.php';
require $control;
require_once 'views/v_foot.php';
