<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class Locations extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			hotel_locations_lotus_x
			(
			COUNTRY_CODE,
			COUNTRY_NAME,
			DESTINATION_CODE,
			CITY,
			ZONE_GROUPING_CODE,
			ZONE_GROUPING_NAME,
			ZONE_CODE,
			ZONE_NAME)
			VALUES
			(
			'".$data['COUNTRY_CODE']."',
			'".$data['COUNTRY_NAME']."',
			'".$data['DESTINATION_CODE']."',
			'".$data['CITY']."',
			'".$data['ZONE_GROUPING_CODE']."',
			'".$data['ZONE_GROUPING_NAME']."',
			'".$data['ZONE_CODE']."',
			'".$data['ZONE_NAME']."'
			)
			");
	}
	
	public function get(array $data)
	{
		$result = 
		$this->getConnection()
		->query("SELECT 
				COUNTRY_CODE,
				COUNTRY_NAME,
				DESTINATION_CODE,
				CITY,
				ZONE_GROUPING_CODE,
				ZONE_GROUPING_NAME,
				ZONE_CODE,
				ZONE_NAME
			FROM hotel_locations_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>