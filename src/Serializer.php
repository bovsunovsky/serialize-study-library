<?php
namespace BOA;
use Symfony\Component\Yaml\Yaml;
use Spatie\ArrayToXml\ArrayToXml;

class Serializer
{

    private $returnedFormat;
    private $returnedString;

    public function serialize($data)
    {
        switch ($this->returnedFormat){
            case 'json': $this->returnedString = $this->serializeJson($data); break;
            case 'yaml': $this->returnedString = $this->serializeYaml($data); break;
            case 'xml': $this->returnedString = $this->serializeXml($data); break;
        }
        return $this->returnedString;
    }

    private function serializeJson($data) {
        return json_encode($data);
    }

    private function serializeYaml($data) {
        if(is_object($data)){
            return  Yaml::dump($data, 2, 4,Yaml::DUMP_OBJECT);
        } else {
            return Yaml::dump($data);
        }
    }

    private function serializeXml($data) {
        if(is_object($data)){
            $data = json_decode(json_encode($data), true);
            return  ArrayToXml::convert($data);
        }
        return ArrayToXml::convert($data);
    }

    public function setReturnedFormat($returnedFormat)
    {
        $this->returnedFormat = $returnedFormat;
    }

}