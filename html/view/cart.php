<?php
echo "<head>";
//include(V . "header-content.php");
echo "</head>";
echo "<body>";
echo "<table>";
foreach($_SESSION['cart'] as $ordername => $order)
{
echo "<tr>";
echo "<td>";
echo $ordername;
echo "</td>";
echo "<td>";
echo $order;
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
