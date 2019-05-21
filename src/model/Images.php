<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
use LotusX\interfaces\Crud;
/**
* 
*/
class Images extends ConnectToMySQL implements Crud
{
	public function insert(array $data)
	{
		$this->getConnection()
		->query("
			INSERT INTO 
			images_lotus_x
			(
			HOTEL_ID,
			IMAGE_TYPE_CODE,
			IMAGE_PATH,
			ROOM_CODE,
			ROOM_TYPE,
			ORDER,
			VISUAL_ORDER,
			CONTRACT_TYPE)
			VALUES
			('".$data['HOTEL_ID']."',
			'".$data['IMAGE_TYPE_CODE']."',
			'".$data['IMAGE_PATH']."',
			'".$data['ROOM_CODE']."',
			'".$data['ROOM_TYPE']."',
			'".$data['ORDER']."',
			'".$data['VISUAL_ORDER']."',
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
				IMAGE_TYPE_CODE,
				IMAGE_PATH,
				ROOM_CODE,
				ROOM_TYPE,
				ORDER,
				VISUAL_ORDER,
				CONTRACT_TYPE
			FROM images_lotus_x")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>