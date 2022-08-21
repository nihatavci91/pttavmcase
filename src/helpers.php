<?php

function array_of_objects_to_xml( $data, &$xml_data ) {
    foreach ($data as $obj) {
        $xml_faq = $xml_data->addChild('product');
        foreach ((array) $obj as $element_name => $element_value) {
            $xml_faq->addChild($element_name, $element_value);
        }
    }
}