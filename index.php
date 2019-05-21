<?php
require "vendor/autoload.php";

use LotusX\model\Sync;
use LotusX\api\HotelBeds;

$HotelBeds = new HotelBeds();
$Sync = new Sync();

$HBedsResult = json_decode($HotelBeds->getPropertyDetails());

$hotels = $HBedsResult->hotels;
$hotels['contract_type'] ='HBeds';
echo '<pre>';
print_r($HBedsResult->hotels); exit;
$Sync->insert($hotels);

?>
