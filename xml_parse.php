<?php
require('xmlreader-iterators.php');
$reader = new XMLReader();
$reader->open("one_label.xml");
// $reader->setParserProperty(2, true);
$labels = new XMLElementIterator($reader, 'label');
$images = new XMLElementIterator($reader, 'image');
$result_array = array();

foreach ($labels as $key => $labelNode) {
  while ($reader->read()) {
    if ($reader->nodeType !== 15) {
      switch ($reader->name) {
        case 'name':
        $result_array['name'] = $reader->readInnerXML();
        $reader->read();
        break;
        case 'contactinfo':
        $result_array['contactinfo'] = $reader->readInnerXML();
        $reader->read();
        break;
        case 'profile':
        $result_array['profile'] = $reader->readInnerXML();
        $reader->read();
        break;
        // case 'images':
        // foreach ($images as $key => $imageNode) {
        //    $result_array["images"]["image" . ($key + 1)]["height"] = $imageNode->getAttribute("height");
        //    $result_array["images"]["image" . ($key + 1)]["width"] = $imageNode->getAttribute("width");
        //    $result_array["images"]["image" . ($key + 1)]["type"] = $imageNode->getAttribute("type");
        //    $result_array["images"]["image" . ($key + 1)]["uri"] = $imageNode->getAttribute("uri");
        //    $result_array["images"]["image" . ($key + 1)]["uri150"] = $imageNode->getAttribute("uri150");
        // }
        $reader->read();
        break;



      }
    }
  }

}

var_dump($result_array);

?>
