<?php
$xml = new XMLReader();
$xml->open("one_label.xml");
$xml->setParserProperty(2, true);
$result_array = array();
while ($xml->read()) {
  switch ($xml->nodeType) {
    case 1:
      switch ($xml->name) {
        // case "image":
        //   echo $xml->getAttribute('uri');
        //   $xml->read();
        //   break;
        case "name":
          $result_array["name"] = $xml->readInnerXml();
          $xml->read();
          break;
        case "contactinfo":
          $result_array["contactinfo"] = $xml->readInnerXml();
          $xml->read();
          break;
        case "profile":
          $result_array["profile"] = $xml->readInnerXml();
          break;
        case "image":
          $counter = 0;
          $result_array["images"]["image" . $counter]["uri"] = $xml->getAttribute("uri");
          $result_array["images"]["image" . $counter]["uri150"] = $xml->getAttribute("uri150");
          $result_array["images"]["image" . $counter]["height"] = $xml->getAttribute("height");
          $result_array["images"]["image" . $counter]["width"] = $xml->getAttribute("width");
          $result_array["images"]["image" . $counter]["type"] = $xml->getAttribute("type");
          $counter ++;
          break;
    }
    break;
  }
}
//   switch ($xml->name) {
//     // case "image":
//     //   echo $xml->getAttribute('uri');
//     //   $xml->read();
//     //   break;
//     case "name":
//       $name = $xml->readInnerXml();
//       $node_type = $xml->nodeType;
//       var_dump($name);
//       var_dump($node_type);
//       $result_array["name"] = $name;
//       $xml->read();
//       break;
//     case "contactinfo":
//       $result_array["contactinfo"] = $xml->readInnerXml();
//       $xml->read();
//       break;
//     case "profile":
//       $result_array["profile"] = $xml->readInnerXml();
//       break;
//   }
// }
var_dump($result_array);
// $xml->read();
// echo $xml->name;
// $xml->read();
// echo $xml->name;
// $xml->read();
// $name = $xml->name;
// echo $name;
// echo $xml->getAttribute('uri');
?>
