<?php
/*
    Version: 1.0
    Author: HKLCF
    Copyright: HKLCF
    Last Modified: 18/08/2015
*/
$xml = simplexml_load_file('http://rss.tvb.com/getFeed/', 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$xml = json_encode($xml);
$xml = json_decode($xml, true);
print_r($xml['channel']['item']);
?>
