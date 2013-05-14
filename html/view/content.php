<?php
echo "<div id='content'><h2>";
echo $data['catname'];
echo "</h2>";
foreach($data["cat"] as $category)
{   
    echo "<p>";
    echo "<table>";
    foreach($category as $item)
    {
    echo $item->name." ";
    echo $item->prices." ";
    echo $item->pricel." ";
    echo "</br>";
    }
    echo "</p>";
    echo "</table>";
}
echo "</div>";
?>
