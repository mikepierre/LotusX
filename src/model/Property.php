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
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		return $result;
	}

	public function get(array $data)
	{
		$result = 
		$this->getConnection()
		->query("select 1 + 1")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>