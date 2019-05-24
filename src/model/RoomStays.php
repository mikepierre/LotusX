<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;

/**
 * Class RoomStays
 * @package LotusX\model
 */
class RoomStays extends ConnectToMySQL implements Crud
{
    /**
     * @param array $data
     */
    public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			room_stays_lotus_x
			(HOTEL_ID,
			STAY_TYPE,
			ORDER,
			DESCRIPTION,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['STAY_TYPE']."',
			'".$data['ORDER']."',
			'".$data['DESCRIPTION']."',
			'".$data['CONTRACT_TYPE']."')
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
			STAY_TYPE,
			ORDER,
			DESCRIPTION,
			CONTRACT_TYPE
			FROM room_stays_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>