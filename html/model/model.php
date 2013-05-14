<?php
$xml = simplexml_load_file(M . "data.xml");
    $data['catname'] = $data['cat'];
    $path = "/menu/".$data['catname'];
    $data["cat"] = $xml->xpath($path);

?>
