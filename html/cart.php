<?php
session_start();
if(isset($_POST['post']))
{
    foreach($_POST as $ordername => $order)
    {
        if($order > 0)
        $_SESSION['cart']["$ordername"] = (isset($_SESSION['cart']["$ordername"])) ? $_SESSION['cart']["$ordername"]+$order : $order;
    }
header("Location: index.php");
}
else
{
   include("view/cart.php");
}
//$quantity = array();
//    foreach($_SESSION['cart'] as $item)
//    {        $quantity[$item] = (isset($quantity[$item])) ?  $quantity[$item] + 1 : 1 ;    }
//$_SESSION['quantity'] = $quantity;
?>
