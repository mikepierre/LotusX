<?php
namespace LotusX\api;

use LotusX\util\CurlRequest;
use LotusX\traits\YamlDigest;

/**
* 
*/
class MagicStarsVacations
{
	use YamlDigest;

	public function getPropertyDetails(array $data)
	{
		$yaml = $this->getYaml(['yaml_file'=>'magic_stars_vacations']);
		
		$curl = new CurlRequest();

		$result = $curl->request(
			[
				'signature'=>false,
				'api_key'=>$yaml['api_key'],
				'secret'=>null,
				'endpoint'=>$yaml['profile_end_point']
			]
		);

		return $result;
	}
}
?>
