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
		//print_r($data); exit;
		for ($i=0; $i < count($data); $i++) { 
			/*
			Profile
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
			*/
			//Facilities
			for ($n=0; $n < count($data[$i]->facilities); $n++) { 
				echo (isset($data[$i]->facilities[$n]->facilityCode) ? $data[$i]->facilities[$n]->facilityCode : null);
				echo (isset($data[$i]->facilities[$n]->facilityGroupCode) ? $data[$i]->facilities[$n]->facilityGroupCode : null);
				echo (isset($data[$i]->facilities[$n]->order) ? $data[$i]->facilities[$n]->order : null);
				echo (isset($data[$i]->facilities[$n]->indYesOrNo) ? $data[$i]->facilities[$n]->indYesOrNo : null);
				echo (isset($data[$i]->facilities[$n]->number) ? $data[$i]->facilities[$n]->number : null);
				echo (isset($data[$i]->facilities[$n]->voucher) ? $data[$i]->facilities[$n]->voucher : null);
			}
			// Images
			for ($o=0; $o < count($data[$i]->images); $o++) { 
				echo (isset($data[$i]->images[$o]->imageTypeCode) ? $data[$i]->images[$o]->imageTypeCode : null);
				echo (isset($data[$i]->images[$o]->path) ? $data[$i]->images[$o]->path : null);
				echo (isset($data[$i]->images[$o]->roomCode) ? $data[$i]->images[$o]->roomCode : null);
				echo (isset($data[$i]->images[$o]->roomType) ? $data[$i]->images[$o]->roomType : null);
				echo (isset($data[$i]->images[$o]->characteristicCode) ? $data[$i]->images[$o]->characteristicCode : null);
				echo (isset($data[$i]->images[$o]->order) ? $data[$i]->images[$o]->order : null);
				echo (isset($data[$i]->images[$o]->visualOrder) ? $data[$i]->images[$o]->visualOrder : null);

			}

			//Interst Point
			for ($p=0; $p < count($data[$i]->interestPoints); $p++) { 
				# code...
				echo (isset($data[$i]->images[$p]->facilityCode) ? $data[$i]->images[$p]->facilityCode : null);
				echo (isset($data[$i]->images[$p]->facilityGroupCode) ? $data[$i]->images[$p]->facilityGroupCode : null);
				echo (isset($data[$i]->images[$p]->order) ? $data[$i]->images[$p]->order : null);
				echo (isset($data[$i]->images[$p]->poiName) ? $data[$i]->images[$p]->poiName : null);
				echo (isset($data[$i]->images[$p]->distance) ? $data[$i]->images[$p]->distance : null);
			}

			// Terminals

			for($j = 0; $j < count($data[$i]->rooms); $j++) {
				// Rooms
				echo (isset($data[$i]->rooms[$j]->roomCode) ? $data[$i]->rooms[$j]->roomCode : null);
				echo (isset($data[$i]->rooms[$j]->roomType) ? $data[$i]->rooms[$j]->roomType : null);
				echo (isset($data[$i]->rooms[$j]->characteristicCode) ? $data[$i]->rooms[$j]->characteristicCode : null);

				//roomFacilities
				if(isset($data[$i]->rooms[$j]->roomFacilities)){
					for ($k=0; $k < count($data[$i]->rooms[$j]->roomFacilities); $k++) { 
						# code...
						echo (isset( $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode) ?  $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode : null);
						echo (isset($data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode : null);
						echo (isset($data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo) ? $data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo : null);
						echo (isset($data[$i]->rooms[$j]->roomFacilities[$k]->voucher) ? $data[$i]->rooms[$j]->roomFacilities[$k]->voucher : null);
					}
				}
				// Room Stays
				if(isset($data[$i]->rooms[$j]->roomStays)) {
					for($l = 0; $l < count($data[$i]->rooms[$j]->roomStays); $l++) {
						echo (isset($data[$i]->rooms[$j]->roomStays[$l]->stayType) ? $data[$i]->rooms[$j]->roomStays[$l]->stayType : null);
						echo (isset($data[$i]->rooms[$j]->roomStays[$l]->order) ? $data[$i]->rooms[$j]->roomStays[$l]->order : null);
						echo (isset($data[$i]->rooms[$j]->roomStays[$l]->description) ? $data[$i]->rooms[$j]->roomStays[$l]->description : null);

						// Room Stay Facilities
						if(isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities)) {
							for($m = 0; $m < count($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities); $m++) {

								echo (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode : null);
								echo (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode : null);
								echo (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number : null);
							}
						}
					}
				}

			}
		}

	}
}
?>