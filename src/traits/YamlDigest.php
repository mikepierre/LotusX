<?php
namespace LotusX\traits;

use Symfony\Component\Yaml\Yaml;

/**
 * Trait YamlDigest
 * @package LotusX\traits
 */
trait YamlDigest
{
    /**
     * @param array $data
     * @return mixed
     */
    protected function getYaml(array $data)
    {
        $dir    = __DIR__.'/../../config';

        $d = ($dir.'/'.$data['yaml_file'].'.yml');
        $yaml = Yaml::parse(file_get_contents($d));
        $yamlString = Yaml::dump($yaml);
        $data_yaml = \Symfony\Component\Yaml\Yaml::parse($yamlString);

        return $data_yaml;
    }
}
?>