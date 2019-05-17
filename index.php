<?php
require "vendor/autoload.php";

use LotusX\model\Property;
use LotusX\api\HotelBeds;

$Property = new Property();
$HotelBeds = new HotelBeds();

echo '<pre>';
$HBedsResult = json_decode($HotelBeds->getPropertyDetails());

print_r($HBedsResult->hotels);
$Property->insert($HBedsResult->hotels);

?>