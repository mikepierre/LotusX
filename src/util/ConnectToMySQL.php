<?php
namespace LotusX\util;

use LotusX\traits\YamlDigest;

/**
 * Class ConnectToMySQL
 * @package LotusX\util
 */
class ConnectToMySQL
{
    use YamlDigest;

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        $yaml = $this->getYaml(['yaml_file'=>'db']);
        return new \PDO('mysql:host='.$yaml['host'].';dbname='.$yaml['database'].'', $yaml['username'], $yaml['password']);
    }

}
?>