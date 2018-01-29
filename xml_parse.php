<?php
$xml = new XMLReader();
$xml->open("labels_20080309.xml");
$xml->setParserProperty(2, true);
while ($xml->read()) {
  switch ($xml->name) {
    case "image":
      echo $xml->getAttribute('uri');
      $xml->read();
      break;
    case "name":
      echo $xml->readInnerXml();
      $xml->read();
      break;
  }
}
// $xml->read();
// echo $xml->name;
// $xml->read();
// echo $xml->name;
// $xml->read();
// $name = $xml->name;
// echo $name;
// echo $xml->getAttribute('uri');
?>
