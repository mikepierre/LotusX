<?php
namespace LotusX\model;

use LotusX\model\Facilities;
use LotusX\model\Property;
use LotusX\model\Images;
use LotusX\model\Rooms;
use LotusX\model\InterestPoints;
use LotusX\model\Terminals;
use LotusX\model\RoomFacilities;
use LotusX\model\RoomStays;
use LotusX\model\RoomStayFacilities;


/**
 * Class Sync
 * @package LotusX\model
 */
class Sync
{
    /**
     * @param array $data
     */
    public function insert(array $data)
	{
		$Facilities = new Facilities();
		$Property = new Property();
		$Images = new Images();
		$Rooms = new Rooms();
		$InterestPoints = new InterestPoints();
		$Terminals = new Terminals();
		$RoomFacilities = new RoomFacilities();
		$RoomStays = new RoomStays();
		$RoomStayFacilities = new RoomStayFacilities();

		$contractType = $data['contract_type'];

		for ($i=0; $i < count($data); $i++) { 
			
			$hotelId = $data[$i]->code;
			//Profile
			$profileName = (isset($data[$i]->name->content) ? $data[$i]->name->content : null);
			$profileDescription = (isset($data[$i]->description->content) ? $data[$i]->description->content : null);
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
			$profileEmail = (isset($data[$i]->email) ? $data[$i]->email : null);
			$profileLicense = (isset($data[$i]->license) ? $data[$i]->license : null);
			$profileWeb = (isset($data[$i]->web) ? $data[$i]->web : null);
			$profileLastUpdate = (isset($data[$i]->lastUpdate) ? $data[$i]->lastUpdate : null);
			$profileRanking = (isset($data[$i]->ranking) ? $data[$i]->ranking : null);
			
			$Profile->insert([
				'HOTEL_ID'=>$hotelId,
				'NAME'=>$profileName,
				'DESCRIPTION'=>$profileDescription,
				'COUNTRY_CODE'=>$profileCountryCode,
				'STATE_CODE'=>$profileStateCode,
				'DESTINATION_CODE'=>$profileDestionationCode,
				'ZONE_CODE'=>$profileZoneCode,
				'LONGITUDE'=>$profilelongitude,
				'LATITUDE'=>$profileLatitude,
				'CATEGORY_CODE,'=>$profileCategoryCode,
				'CATEGORY_GROUP_CODE'=>$profielCategoryGroupCode,
				'ACCOMMODATION_TYPE_CODE'=>$profileAccommodationTypeCode,
				'SEGMENT_CODES'=>null,
				'ADDRESS'=>$profileAddress,
				'POSTAL_CODE'=>$profilePostalCode,
				'CITY'=>$profileCity,
				'EMAIL'=>$profileEmail,
				'LICENSE'=>$profileLicense,
				'PHONES'=>null,
				'WEB'=>$profileWeb,
				'LAST_UPDATE'=>$profileLastUpdate,
				'RANKING'=>$profileRanking,
				'CONTRACT_TYPE'=>$contractType
			]);

			//Facilities
			for ($n=0; $n < count($data[$i]->facilities); $n++) { 
				$facilityCode = (isset($data[$i]->facilities[$n]->facilityCode) ? $data[$i]->facilities[$n]->facilityCode : null);
				$facilityGroupCode = (isset($data[$i]->facilities[$n]->facilityGroupCode) ? $data[$i]->facilities[$n]->facilityGroupCode : null);
				$facilityOrder = (isset($data[$i]->facilities[$n]->order) ? $data[$i]->facilities[$n]->order : null);
				$facilityIndYesOrNo = (isset($data[$i]->facilities[$n]->indYesOrNo) ? $data[$i]->facilities[$n]->indYesOrNo : null);
				$facilityNumber  =(isset($data[$i]->facilities[$n]->number) ? $data[$i]->facilities[$n]->number : null);
				$facilityVoucher = (isset($data[$i]->facilities[$n]->voucher) ? $data[$i]->facilities[$n]->voucher : null);

				$Facilities->insert([
					'HOTEL_ID'=>$hotelId,
					'FACILITY_CODE'=>$facilityCode,
					'FACILITY_GROUP_CODE'=>$facilityGroupCode,
					'ORDER'=>$facilityOrder,
					'FACILITY_NUMBER'=>$facilityIndYesOrNo,
					'VOUCHER'=>$facilityVoucher,
					'CONTRACT_TYPE'=>$contractType
				]);
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
				
				$Images->insert([
					'HOTEL_ID'=>$hotelId,
					'IMAGE_TYPE_CODE'=>$imageTypeCode,
					'IMAGE_PATH'=>$imagePath ,
					'ORDER'=>$imagesOrder,
					'ROOM_CODE'=>$roomCode,
			        'ROOM_TYPE'=>$roomType,
					'VISUAL_ORDER'=>$visualOrde,
					'CONTRACT_TYPE'=>$contractType
				]);
			}

			//Interst Point
			for ($p=0; $p < count($data[$i]->interestPoints); $p++) { 

				$facilityCode = (isset($data[$i]->images[$p]->facilityCode) ? $data[$i]->images[$p]->facilityCode : null);
				$facilityGroupCode = (isset($data[$i]->images[$p]->facilityGroupCode) ? $data[$i]->images[$p]->facilityGroupCode : null);
				$interestPointsOrder = (isset($data[$i]->images[$p]->order) ? $data[$i]->images[$p]->order : null);
				$poiName = (isset($data[$i]->images[$p]->poiName) ? $data[$i]->images[$p]->poiName : null);
				$distanceInterestPoints = (isset($data[$i]->images[$p]->distance) ? $data[$i]->images[$p]->distance : null);

				$InterestPoints->insert([
					'HOTEL_ID'=>$hotelId,
					'FACILITY_CODE'=>$facilityCode,
					'FACILITY_GROUP_CODE'=>$facilityGroupCode,
					'ORDER'=>$interestPointsOrder,
					'POI_NAME'=>$poiName,
					'DISTANCE'=>$distanceInterestPoints,
					'CONTRACT_TYPE'=>$contractType
				]);
			}

			// Terminals

			for ($q=0; $q < count($data[$i]->terminals); $q++) { 
				$terminalCode = (isset($data[$i]->terminals[$q]->terminalCode) ? $data[$i]->terminals[$q]->terminalCode : null);
				$terminalsDistance = (isset($data[$i]->terminals[$q]->distance) ? $data[$i]->terminals[$q]->distance : null);

				$Terminals->insert([
					'HOTEL_ID'=>$hotelId,
					'TERMINAL_CODE'=>$terminalCode,
					'DISTANCE'=>$terminalsDistanc,
					'CONTRACT_TYPE'=>$contractType
				]);
			}

			for($j = 0; $j < count($data[$i]->rooms); $j++) {
				// Rooms
				$roomCode = (isset($data[$i]->rooms[$j]->roomCode) ? $data[$i]->rooms[$j]->roomCode : null);
				$roomType = (isset($data[$i]->rooms[$j]->roomType) ? $data[$i]->rooms[$j]->roomType : null);
				$characteristicCode = (isset($data[$i]->rooms[$j]->characteristicCode) ? $data[$i]->rooms[$j]->characteristicCode : null);

				$Rooms->insert([
					'HOTEL_ID'=>$hotelId,
					'ROOM_CODE'=>$roomCode ,
					'ROOM_TYPE'=>$roomType,
					'CHARACTERISTIC_CODE'=>$characteristicCode,
					'CONTRACT_TYPE'=>$contractType
				]);

				//roomFacilities
				if(isset($data[$i]->rooms[$j]->roomFacilities)){
					for ($k=0; $k < count($data[$i]->rooms[$j]->roomFacilities); $k++) { 
						$facilityCode = (isset( $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode) ?  $data[$i]->rooms[$j]->roomFacilities[$k]->facilityCode : null);
						$facilityGroupCode = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomFacilities[$k]->facilityGroupCode : null);
						$indYesOrNo = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo) ? $data[$i]->rooms[$j]->roomFacilities[$k]->indYesOrNo : null);
						$voucher = (isset($data[$i]->rooms[$j]->roomFacilities[$k]->voucher) ? $data[$i]->rooms[$j]->roomFacilities[$k]->voucher : null);

						$RoomFacilities->insert([
							'HOTEL_ID'=>$hotelId,
							'FACILITY_CODE'=>$facilityCode,
							'FACILITY_GROUP_CODE'=>$facilityGroupCode,
							'IND_YES_OR_NO'=>$indYesOrNo,
							'VOUCHER'=>$voucher,
							'CONTRACT_TYPE'=>$contractType
						]);
					}
				}
				// Room Stays
				if(isset($data[$i]->rooms[$j]->roomStays)) {
					for($l = 0; $l < count($data[$i]->rooms[$j]->roomStays); $l++) {
						$roomStaysDescriptionStayType = (isset($data[$i]->rooms[$j]->roomStays[$l]->stayType) ? $data[$i]->rooms[$j]->roomStays[$l]->stayType : null);
						$roomStaysOrder = (isset($data[$i]->rooms[$j]->roomStays[$l]->order) ? $data[$i]->rooms[$j]->roomStays[$l]->order : null);
						$roomStaysDescription = (isset($data[$i]->rooms[$j]->roomStays[$l]->description) ? $data[$i]->rooms[$j]->roomStays[$l]->description : null);

						$RoomStays->insert([
							'HOTEL_ID'=>$hotelId,
							'STAY_TYPE'=>$roomStaysDescriptionStayType,
							'ORDER'=>$roomStaysOrder,
							'DESCRIPTION'=>$roomStaysDescription,
							'CONTRACT_TYPE'=>$contractType
						]);
						// Room Stay Facilities
						if(isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities)) {
							for($m = 0; $m < count($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities); $m++) {

								$facilityCode = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityCode : null);
								$facilityGroupCode = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->facilityGroupCode : null);
								$roomStayFacilitiesNumber = (isset($data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number) ? $data[$i]->rooms[$j]->roomStays[$l]->roomStayFacilities[$m]->number : null);

								$RoomStayFacilities->insert([
									'HOTEL_ID'=>$hotelId,
									'FACILITY_CODE'=>$facilityCode,
									'FACILITY_GROUP_CODE'=>$facilityGroupCode,
									'FACILITY_NUMBER'=>$roomStayFacilitiesNumber,
									'CONTRACT_TYPE'=>$contractType
								]);
							}
						}
					}
				}
			}
		}

	}
}
?>