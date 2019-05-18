<?php
namespace LotusX\model;

use LotusX\model\Facilities;
use LotusX\model\Property;
use LotusX\model\Images;
use LotusX\model\Rooms;
use LotusX\model\InterestPoints;
use LotusX\model\Terminals;
/**
* 
*/
class Sync
{
	public function insert(array $data)
	{
		echo '<pre>';
		print_r($data[0]->rooms); exit;
		for ($i=0; $i < count($data); $i++) { 
			echo $data[$i]->name->content;
			echo $data[$i]->description->content;
			echo $data[$i]->countryCode;
			echo $data[$i]->stateCode;
			echo $data[$i]->destinationCode;
			echo $data[$i]->zoneCode;
			echo $data[$i]->coordinates->longitude;
			echo $data[$i]->coordinates->latitude;
			echo $data[$i]->categoryCode;
			echo $data[$i]->categoryGroupCode;
			echo $data[$i]->accommodationTypeCode;
			echo $data[$i]->address->content;
			echo $data[$i]->postalCode;
			echo $data[$i]->city->content;
			echo (isset($data[$i]->email) ? $data[$i]->email : null);
			echo (isset($data[$i]->license) ? $data[$i]->license : null);
			echo (isset($data[$i]->web) ? $data[$i]->web : null);
			echo (isset($data[$i]->lastUpdate) ? $data[$i]->lastUpdate : null);
			echo (isset($data[$i]->ranking) ? $data[$i]->ranking : null);
		}

	}
}
?>