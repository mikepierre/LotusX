<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;

/**
 * Class Rooms
 * @package LotusX\model
 */
class Rooms extends ConnectToMySQL implements Crud
{
    /**
     * @param array $data
     */
    public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			rooms_lotus_x
			(HOTEL_ID,
			ROOM_CODE,
			ROOM_TYPE,
			CHARACTERISTIC_CODE,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['ROOM_CODE']."',
			'".$data['ROOM_TYPE']."',
			'".$data['CHARACTERISTIC_CODE']."',
			'".$data['CONTRACT_TYPE']."'
			)
			");
	}

    /**
     * @param array $data
     * @return array
     */
    public function get(array $data)
	{
		$result = 
		$this->getConnection()
		->query("SELECT 
				HOTEL_ID,
				ROOM_CODE,
				ROOM_TYPE,
				CHARACTERISTIC_CODE,
				CONTRACT_TYPE
			FROM rooms_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>