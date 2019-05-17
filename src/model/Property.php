<?php
namespace LotusX\model;

use LotusX\util\ConnectToMySQL;
/**
* 
*/
class Property extends ConnectToMySQL
{
	public function insert(array $data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		/*
		$result =
		$this->getConnection()
		->query();
		*/
		return $result;
	}
	
	public function get()
	{
		$result = 
		$this->getConnection()
		->query("select 1 + 1")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}

}
?>