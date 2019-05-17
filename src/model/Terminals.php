<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class Terminals extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			terminals_lotus_x
			(HOTEL_ID,
			TERMINAL_CODE,
			DISTANCE,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['TERMINAL_CODE']."',
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
			TERMINAL_CODE,
			DISTANCE,
			CONTRACT_TYPE
			FROM terminals_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>