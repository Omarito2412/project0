<?php
echo '<body> <h1> Your Cart </h1> </body>';
$items = explode(',',$_SESSION['cart']);
$contents = array();
    foreach($items as $item)
    $contents[$item] = (isset($contents[$items]) ? $contents[item]+1:1;
    foreach($items as $item)
    {
        echo $item;
        echo 'Quantity'.$contents['item'];        
    }
    echo "</body>"
?>
