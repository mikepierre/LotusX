<?php
namespace LotusX\api;

use LotusX\util\CurlRequest;
use LotusX\traits\YamlDigest;

/**
* 
*/
class HotelBeds
{
	use YamlDigest;

	public function getPropertyDetails()
	{
		$yaml = $this->getYaml(['yaml_file'=>'hotel_beds']);
		
		$curl = new CurlRequest();

		$result = $curl->request(
			[
				'signature'=>true,
				'api_key'=>$yaml['api_key'],
				'secret'=>$yaml['secret'],
				'endpoint'=>$yaml['profile_end_point']
			]
		);

		return $result;
	}
}
?>
