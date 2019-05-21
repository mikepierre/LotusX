<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class InterestPoints extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			interest_points_lotus_x
			(
			HOTEL_ID,
			FACILITY_CODE,
			FACILITY_GROUP_CODE,
			ORDER,
			POI_NAME,
			DISTANCE,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['FACILITY_CODE']."',
			'".$data['FACILITY_GROUP_CODE']."',
			'".$data['ORDER']."',
			'".$data['POI_NAME']."',
			'".$data['DISTANCE']."',
			'".$data['CONTRACT_TYPE']."'
			)
			");
	}

	public function get(array $data)
	{
		$result = 
		$this->getConnection()
		->query("SELECT 
			HOTEL_ID,
			FACILITY_CODE,
			FACILITY_GROUP_CODE,
			ORDER,
			POI_NAME,
			DISTANCE,
			CONTRACT_TYPE
			FROM interest_points_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>