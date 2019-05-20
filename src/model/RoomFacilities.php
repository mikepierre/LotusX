<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class RoomFacilities extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			room_facilities_lotus_x
			(HOTEL_ID,
			FACILITY_CODE,
			FACILITY_GROUP_CODE,
			IND_YES_OR_NO,
			VOUCHER,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['FACILITY_CODE']."',
			'".$data['FACILITY_GROUP_CODE']."',
			'".$data['IND_YES_OR_NO']."',
			'".$data['VOUCHER']."',
			'".$data['CONTRACT_TYPE']."')
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
			IND_YES_OR_NO,
			VOUCHER,
			CONTRACT_TYPE
			FROM room_facilities_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>