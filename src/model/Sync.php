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
		for ($i=0; $i < count($data); $i++) { 
			
			//Profile
			$profileName = (isset($data[$i]->name->content) ? $data[$i]->name->content ? null);
			$profileDescription = (isset($data[$i]->description->content) $data[$i]->description->content ? null);
			$profileCountryCode = (isset($data[$i]->countryCode) ? $data[$i]->countryCode : null );
			$profileStateCode = (isset($data[$i]->stateCode) ? $data[$i]->stateCode : null);
			$profileDestionationCode = (isset($data[$i]->destinationCode) ? $data[$i]->destinationCode : null);
			$profileZoneCode = (isset($data[$i]->zoneCode) ? $data[$i]->zoneCode : null);
			$profilelongitude = (isset($data[$i]->coordinates->longitude) ? $data[$i]->coordinates->longitude : null);
			$profileLatitude = (isset($data[$i]->coordinates->latitude) ? $data[$i]->coordinates->latitude : null);
			$profileCategoryCode = (isset($data[$i]->categoryCode) ?  $data[$i]->categoryCode : null);
			$profielCategoryGroupCode = (isset($data[$i]->categoryGroupCode) ? $data[$i]->categoryGroupCode : null);
			$profileAccommodationTypeCode = (isset($data[$i]->accommodationTypeCode) ? $data[$i]->accommodationTypeCode : null);
			$profileAddress = (isset($data[$i]->address->content) ? $data[$i]->address->content : null);
			$profilePostalCode = (isset($data[$i]->postalCode) ? $data[$i]->postalCode : null);
			$profileCity = (isset($data[$i]->city->content) ? $data[$i]->city->content : null);
			$profileCity = (isset($data[$i]->email) ? $data[$i]->email : null);
			$profileLicense = (isset($data[$i]->license) ? $data[$i]->license : null);
			$profileWeb = (isset($data[$i]->web) ? $data[$i]->web : null);
			$profileLastUpdate = (isset($data[$i]->lastUpdate) ? $data[$i]->lastUpdate : null);
			$profileRanking = (isset($data[$i]->ranking) ? $data[$i]->ranking : null);
			
			//Facilities
			for ($n=0; $n < count($data[$i]->facilities); $n++) { 
				$facilityCode = (isset($data[$i]->facilities[$n]->facilityCode) ? $data[$i]->facilities[$n]->facilityCode : null);
				$facilityGroupCode = (isset($data[$i]->facilities[$n]->facilityGroupCode) ? $data[$i]->facilities[$n]->facilityGroupCode : null);
				$facilityOrder = (isset($data[$i]->facilities[$n]->order) ? $data[$i]->facilities[$n]->order : null);
				$facilityIndYesOrNo = (isset($data[$i]->facilities[$n]->indYesOrNo) ? $data[$i]->facilities[$n]->indYesOrNo : null);
				$facilityNumber  =(isset($data[$i]->facilities[$n]->number) ? $data[$i]->facilities[$n]->number : null);
				$facilityVoucher = (isset($data[$i]->facilities[$n]->voucher) ? $data[$i]->facilities[$n]->voucher : null);
			}
			// Images
			for ($o=0; $o < count($data[$i]->images); $o++) { 
				$imageTypeCode = (isset($data[$i]->images[$o]->imageTypeCode) ? $data[$i]->images[$o]->imageTypeCode : null);
				$imagePath = (isset($data[$i]->images[$o]->path) ? $data[$i]->images[$o]->path : null);
				$roomCode = (isset($data[$i]->images[$o]->roomCode) ? $data[$i]->images[$o]->roomCode : null);
				$roomType = (isset($data[$i]->images[$o]->roomType) ? $data[$i]->images[$o]->roomType : null);
				$characteristicCode = (isset($data[$i]->images[$o]->characteristicCode) ? $data[$i]->images[$o]->characteristicCode : null);
				$imagesOrder = (isset($data[$i]->images[$o]->order) ? $data[$i]->images[$o]->order : null);
				$visualOrder = (isset($data[$i]->images[$o]->visualOrder) ? $data[$i]->images[$o]->visualOrder : null);

			}

			//Interst Point
			for ($p=0; $p < count($data[$i]->interestPoints); $p++) { 
				# code...
				$facilityCode = (isset($data[$i]->images[$p]->facilityCode) ? $data[$i]->images[$p]->facilityCode : null);
				$facilityGroupCode = (isset($data[$i]->images[$p]->facilityGroupCode) ? $data[$i]->images[$p]->facilityGroupCode : null);
				$interestPointsOrder = (isset($data[$i]->images[$p]->order) ? $data[$i]->images[$p]->order : null);
				$poiName = (isset($data[$i]->images[$p]->poiName) ? $data[$i]->images[$p]->poiName : null);
				$distanceInterestPoints = (isset($data[$i]->images[$p]->distance) ? $data[$i]->images[$p]->distance : null);
			}

			// Terminals

			for ($q=0; $q < count($data[$i]->terminals); $q++) { 
				# code...
				$roomCode = (isset($data[$i]->terminals[$q]->terminalCode) ? $data[$i]->terminals[$q]->terminalCode : null);
				$terminalsDistance = (isset($data[$i]->terminals[$q]->distance) ? $data[$i]->terminals[$q]->distance : null);
			}

			for($j = 0; $j < count($data[$i]->rooms); $j++) {
				// Rooms
				$roomCode = (isset($data[$i]->rooms[$j]->roomCode) ? $data[$i]->rooms[$j]->roomCode : null);
				$roomType = (isset($data[$i]->rooms[$j]->roomType) ? $data[$i]->rooms[$j]->roomType : null);
				$characteristicCode = (isset($data[$i]->rooms[$j]->characteristicCode) ? $data[$i]->rooms[$j]->characteristicCode : null);

				//roomFacilities
				if(isset($data[$i]->rooms[$j]->roomFacilities)){
					for ($k=0; $k < count($data[$i]->rooms[$j]->roomFacilities); $k++) { 
						# code...
						$facilityCode = (isset( $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode) ?  $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode : null);
						$facilityGroupCode = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode : null);
						$indYesOrNo = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo) ? $data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo : null);
						$voucher = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->voucher) ? $data[$i]->rooms[$j]->roomFacilities[$k]->voucher : null);
					}
				}
				// Room Stays
				if(isset($data[$i]->rooms[$j]->roomStays)) {
					for($l = 0; $l < count($data[$i]->rooms[$j]->roomStays); $l++) {
						$stayType = (isset($data[$i]->rooms[$j]->roomStays[$l]->stayType) ? $data[$i]->rooms[$j]->roomStays[$l]->stayType : null);
						$order = (isset($data[$i]->rooms[$j]->roomStays[$l]->order) ? $data[$i]->rooms[$j]->roomStays[$l]->order : null);
						$description = (isset($data[$i]->rooms[$j]->roomStays[$l]->description) ? $data[$i]->rooms[$j]->roomStays[$l]->description : null);

						// Room Stay Facilities
						if(isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities)) {
							for($m = 0; $m < count($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities); $m++) {

								$facilityCode = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode : null);
								$facilityGroupCode = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode : null);
								$number = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number : null);
							}
						}
					}
				}

			}
		}

	}
}
?>