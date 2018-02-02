<?php
require('xmlreader-iterators.php');
$reader = new XMLReader();
$reader->open("only_images.xml");
// $reader->setParserProperty(2, true);
$images = new XMLElementIterator($reader, 'image');
$result_array = array();


foreach ($images as $key => $imageNode) {
   $result_array["images"]["image" . ($key + 1)]["height"] = $imageNode->getAttribute("height");
   $result_array["images"]["image" . ($key + 1)]["width"] = $imageNode->getAttribute("width");
   $result_array["images"]["image" . ($key + 1)]["type"] = $imageNode->getAttribute("type");
   $result_array["images"]["image" . ($key + 1)]["uri"] = $imageNode->getAttribute("uri");
   $result_array["images"]["image" . ($key + 1)]["uri150"] = $imageNode->getAttribute("uri150");
}
var_dump($result_array);
?>
