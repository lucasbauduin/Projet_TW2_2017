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

function getStations() {
  $data = file_get_contents("https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&rows=250&timezone=Europe/Paris");
  $stations = json_decode($data);
  return $stations->records;
}

function getTheStation($id) {
  foreach (getStations() as $aStation) {
    if($aStation->fields->libelle == $id) {
      return $aStation;
    }
  }
  return -1;
}
