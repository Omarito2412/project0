<?php
session_start();
define('APP_FOLDER','');
define('M', APP_FOLDER . 'model/');
define('V', APP_FOLDER . 'view/');
define('C', APP_FOLDER . 'controller/');
function writeShoppingCart() {
$cart = $_SESSION['cart'];
if (!$cart)
{
return '<div id="notification"><p> You have no items in your cart </p></div>';
}
else
{
    $items = $qty = 0;
    foreach($cart as $ordername => $order)
    {
        $items++;
        $qty = $qty + $order;
    }
    if($items > 1)
    $s = "s";
    else
    $s = "";
return '<div id="notification"><p>You have <a href="cart.php">'.$items.' item'.$s.' in your shopping cart with a quantity of '.$qty.'</a></p></div>';
}
}
// Start the controller
require(C . "controller.php");

?>
