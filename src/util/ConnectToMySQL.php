<?php
namespace LotusX\util;

use LotusX\traits\YamlDigest;
/**
* 
*/
class ConnectToMySQL
{
    use YamlDigest;

    public function getConnection()
    {
        $yaml = $this->getYaml(['yaml_file'=>'db']);
        return new \PDO('mysql:host='.$yaml['host'].';dbname='.$yaml['database'].'', $yaml['username'], $yaml['password']);
    }

}
?>