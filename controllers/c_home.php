<?php
require 'models/m_stations.php';
$stations = getStations();
require 'views/v_home.php';
