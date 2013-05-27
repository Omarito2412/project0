<?php
session_start();
//$_SESSION['cart'] = array();
//print_r ($_SESSION['cart']);
//print_r ($_POST);

if(isset($_POST["removal"])) //Is the user trying to remove items?
{
    foreach($_POST as $ordername => $zero)
    {
        if($zero == 0)
        {        
        $name = str_replace('_',' ',$ordername);
        unset($_SESSION['cart']["$name"]); //Remove that item
        header("Location: index.php");
        }
    }
}
else
{
    if(isset($_POST['post'])) //is the user trying to add items?
    {
     foreach($_POST as $ordername => $order)
     {
         $ordername = str_replace('_' , ' ' , $ordername);
         if($order > 0)
         $_SESSION['cart']["$ordername"] = (isset($_SESSION['cart']["$ordername"])) ? $_SESSION['cart']["$ordername"]+$order : $order;
     }
         header("Location: index.php");
    }
    
    else //Just show him the cart!
    {
    if(empty($_SESSION['cart']))
    echo "Your cart is empty";
    include("view/cart.php");
    }
}    
?>
