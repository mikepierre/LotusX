<?php
require "vendor/autoload.php";

use LotusX\model\Sync;
use LotusX\api\HotelBeds;

$HotelBeds = new HotelBeds();
$Sync = new Sync();
/* TODO
  - GIVE TWO OPTIONS AND PASS PARAMATER 1 - START SYNC, 2 - MAP AND RETURN JSON 
  - GET list of IATA/AIRPORT CODES FROM LOCATIONS
  - PASS THE IATA CODES INTO THE PROPERTY DETAILS FUNCTION FOR ALL APIS
  - GET THE DATA AND EXECTUTE THE INSERT SYNC
*/
  
/*
$HBedsResult = json_decode($HotelBeds->getPropertyDetails());

$hotels = $HBedsResult->hotels;
$hotels['contract_type'] ='HBeds';
echo '<pre>';
print_r($HBedsResult->hotels); exit;
*/
$Sync->insert($hotels);

?>
