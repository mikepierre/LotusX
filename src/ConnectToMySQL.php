<?php
namespace LotusX;

use Symfony\Component\Yaml\Yaml;

/**
* 
*/
class ConnectToMySQL
{
    private function getYaml()
    {
        $dir    = __DIR__.'/../config';

        $d = ($dir.'/db.yml');
        $yaml = Yaml::parse(file_get_contents($d));
        $yamlString = Yaml::dump($yaml);
        $data_yaml = \Symfony\Component\Yaml\Yaml::parse($yamlString);

        return $data_yaml;
    }

    public function getConnection()
    {
    	$yaml =  $this->getYaml();

        return new \PDO('mysql:host='.$yaml['host'].';dbname='.$yaml['database'].'', $yaml['username'], $yaml['password']);
    }

}
?>