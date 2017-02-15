<?php

/*
* PARAMETRAGE DU PROXY
* À DÉGAGER LORS DE TESTS EN LOCAL
*

$configContext = array(
  'http' => array(
    'proxy' => 'tcp://cache.univ-lille1.fr:3128',
    'request_fulluri' => true
  )
);
stream_context_set_default($configContext);
*/

function compareCommune($i, $j) {
  return strcmp($i->fields->commune, $j->fields->commune);
}

function compareNom($i, $j) {
  return strcmp(preg_replace('/\-?\d+/', '', $i->fields->nom), preg_replace('/\-?\d+/', '', $j->fields->nom));
}

function getStations($sortby = "commune") {
  $data = file_get_contents("https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&rows=250&timezone=Europe/Paris");
  $stations = json_decode($data);
  $availableStations = array();
  
  foreach ($stations->records as $aStation) { // On ne garde que les station noté "EN SERVICE"
    if($aStation->fields->etat == "EN SERVICE") {
      $availableStations[] = $aStation;
    }
  }

  switch ($sortby) { // On effectue un tri en fonction de l'argument passé en parametre
    case 'commune':
      usort($availableStations, "compareCommune");
      break;

    case 'nom':
      usort($availableStations, "compareNom");
      break;

    default:
      break;
  }
  return $availableStations;
}

function getTheStation($id) {
  foreach (getStations() as $aStation) {
    if($aStation->fields->libelle == $id) {
      return $aStation;
    }
  }
  return -1;
}
