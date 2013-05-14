<?php
if(!isset($_GET['cat']))
{
    echo'<form action="index.php">
    <select name="cat">
    <option value="pizza">Pizza</option>
    <option value="spaghetti">Spaghetti</option>
    <option value="salad">Salad</option>
    </select></br>
    <input type="submit" value="Load Category">
    </form>';
}
else
{
$data = array('cat' => $_GET['cat'] ); 

include(M . "model.php");
include(V . "view.php");
}
?>
