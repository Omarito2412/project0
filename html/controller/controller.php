<?php
if(!isset($_GET['cat']))
{
   include(V . "view.php");
}
else
{
$data = array('cat' => $_GET['cat'] ); 

include(M . "model.php");
include(V . "view.php");
}
?>
