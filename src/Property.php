<?php
namespace LotusX;

use LotusX\ConnectToMySQL;
/**
* 
*/
class Property extends ConnectToMySQL
{
	public function get()
	{
		$result = 
		$this->getConnection()
		->query("")
		->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	
	}
}
?>