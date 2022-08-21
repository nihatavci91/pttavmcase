<?php

namespace Nihatavci\PttavmCase\Operations;

use SimpleXMLElement;

class FacebookHandler implements HandlerInterface
{
    public static function jsonOperation(array $data)
    {
        file_put_contents(__DIR__. '/../../files/facebook/json/products.json', json_encode($data));

        return __DIR__. '/../../files/facebook/json/products.json';
    }

    public static function xmlOperation(array $data)
    {
        $xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');

        array_of_objects_to_xml($data,$xml_data);

        $xml_data->asXML(__DIR__. '/../../files/facebook/xml/products.xml');

        return __DIR__. '/../../files/facebook/xml/products.xml';
    }
}