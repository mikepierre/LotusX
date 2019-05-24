<?php
namespace LotusX\util;

use Symfony\Component\Yaml\Yaml;


/**
 * Class CurlRequest
 * @package LotusX\util
 */
class CurlRequest
{
    /**
     * @param array $data
     * @return mixed
     */
    public function request(array $data)
    {

        if($data['signature'] == true)
        {
            $signature = hash("sha256", $data['api_key'].$data['secret'].time());
        }
        
        try
        {
            // Get cURL resource
            $curl = curl_init();
            // Set some options 
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $data['endpoint'],
            CURLOPT_HTTPHEADER => ($data['signature'] == true ?  
                [
                    'Accept:application/json' ,
                    'Api-key:'.$data['api_key'].'', 
                    'X-Signature:'.$signature.''
                ] : [] )
            ));
            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            return $resp;

            // Close request to clear up some resources
            curl_close($curl);

        } catch (Exception $ex) {

            printf("Error while sending request, reason: %s\n",$ex->getMessage());

        }
    }

}
?>