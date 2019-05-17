<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class Property extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO property_lotus_x
			(HOTEL_ID
			NAME,
			DESCRIPTION,
			COUNTRY_CODE,
			STATE_CODE,
			DESTINATION_CODE,
			ZONE_CODE,
			LONGITUDE,
			LATITUDE,
			CATEGORY_CODE,
			CATEGORY_GROUP_CODE,
			ACCOMMODATION_TYPE_CODE,
			SEGMENT_CODES,
			ADDRESS,
			POSTAL_CODE,
			CITY,
			EMAIL,
			LICENSE,
			PHONES,
			WEB,
			LAST_UPDATE,
			RANKING,
			CONTRACT_TYPE)
			VALUES
			(
			'".$data['HOTEL_ID']."',
			'".$data['NAME']."',
			'".$data['DESCRIPTION']."',
		    '".$data['COUNTRY_CODE']."',
		    '".$data['STATE_CODE']."',
			'".$data['DESTINATION_CODE']."',
		    '".$data['ZONE_CODE']."',
		    '".$data['LONGITUDE']."',
			'".$data['LATITUDE']."',
		    '".$data['CATEGORY_CODE']."',
		    '".$data['CATEGORY_GROUP_CODE']."',
			'".$data['ACCOMMODATION_TYPE_CODE']."',
		    '".$data['SEGMENT_CODES']."',
		    '".$data['ADDRESS']."',
			'".$data['POSTAL_CODE']."',
		    '".$data['CITY']."',
		    '".$data['EMAIL']."',
			'".$data['LICENSE']."',
		    '".$data['PHONES']."',
		    '".$data['WEB']."',
			'".$data['LAST_UPDATE']."',
		    '".$data['RANKING']."',
		    '".$data['CONTRACT_TYPE']."')
			");
		return $result;
	}

	public function get(array $data)
	{
		$result = 
		$this->getConnection()
		->query("SELECT 
			HOTEL_ID,
			NAME,
			DESCRIPTION,
			COUNTRY_CODE,
			STATE_CODE,
			DESTINATION_CODE,
			ZONE_CODE,
			LONGITUDE,
			LATITUDE,
			CATEGORY_CODE,
			CATEGORY_GROUP_CODE,
			ACCOMMODATION_TYPE_CODE,
			SEGMENT_CODES,
			ADDRESS,
			POSTAL_CODE,
			CITY,
			EMAIL,
			LICENSE,
			PHONES,
			WEB,
			LAST_UPDATE,
			RANKING,
			CONTRACT_TYPE
			FROM 
			property_lotus_x
			")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>