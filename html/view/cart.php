<?php
echo "<head>";
//include(V . "header-content.php");
echo "</head>";
echo "<body>";
echo "<table>";
echo '<form action="cart.php" method="post">';
foreach($_SESSION['cart'] as $ordername => $order)
{
echo "<tr>";
echo "<td>";
echo $ordername;
echo "</td>";
echo "<td>";
echo $order;
echo "</td>";
echo "<td>";
echo '<button type="submit" value="0"'.'name="'.$ordername.'">'."Remove Item".'</button>';
echo "</td>";
echo "</tr>";
}
echo '<input type="hidden" name="removal" value="1">';
echo "</form>";
echo "</table>";
echo "</body>";
?>
