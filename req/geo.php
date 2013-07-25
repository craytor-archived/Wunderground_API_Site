<?php
require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

$geoplugin->locate();

$visitor_city = $geoplugin->city;
$visitor_state = $geoplugin->region;


?>