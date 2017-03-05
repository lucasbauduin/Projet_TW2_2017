<?php
$projectName = "V'liVe";
require 'models/m_stations.php';

$control = isset($_GET['control']) ? (string) $_GET['control'] : "c_home";
$idstation = isset($_GET['station']) ? (int) $_GET['station'] : null;
$sortby = isset($_GET['sortby']) ? (string) $_GET['sortby'] : "nom";

switch ($control) {
  case 'c_home':
    $pageTitle = "Accueil";
    $control = "controllers/c_home.php";
    break;

  case 'c_credits':
    $pageTitle = "Crédits";
    $control = "controllers/c_credits.php";
    break;

  case 'c_stationInfo':
    $theStation = getTheStation($idstation);
    $pageTitle = preg_replace('/\-?\d+/', '', $theStation->fields->nom);
    $control = "controllers/c_station.php";
    break;

  default:
    $pageTitle = "Oops, il y a un problème !";
    $control = "controllers/c_errors.php";
    break;
}

require_once 'views/v_head.php';
require $control;
require_once 'views/v_foot.php';
