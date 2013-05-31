<?php
if(!isset($_GET['cat']))
{
   echo writeShoppingCart();
   echo'<div id="content"> <form action="index.php">
    <select name="cat">
    <option value="Pizza">Pizza</option>
    <option value="Spaghetti">Spaghetti</option>
    <option value="Salad">Salad</option>
    <option value="Wraps">Wraps</option>
    </select></br>
    <input type="submit" value="Load Category">
    </form>   
        <form action="cart.php">
        <input type="submit" value="View Cart">
        </form>
   </div>';
}
else
{
    echo writeShoppingCart();
    echo "<div id='content'><h2>";
    echo $data['catname'];
    echo "</h2>";
    foreach($data["cat"] as $category)
    {   
        echo '<form action="cart.php" method="post">';
        echo "<table>";
        echo "<tr> <td> Name </td><td> Price(Small/Large) </td> <td>Quantity Small </td> <td> Quantity Large </td> </tr>";
        $id = 1;
        foreach($category as $item)
        {
        echo "<tr> <td>";
        echo $item->name." ";
        echo "</td> <td>";
        echo $item->prices." ";
        echo " / ";
        echo $item->pricel." ";
        echo '</td>';
        echo '<td>';
        echo '<input type="text"'."name=".'"'.$item->name.' Small'.'"'."value=".'"0"/>';
        echo "</td>";
        echo "<td>";
        echo '<input type="text"'."name=".'"'.$item->name.' Large'.'"'."value=".'"0"/>';
        echo "</td>";
        echo "</tr>";
        $id++;
        }
        echo "</table>";
        echo '<input type="hidden" name="post" />';
        echo '<input type="submit" value="Add to Cart" />';
        echo "</form>";
        }
    echo '<form action="cart.php"> <button type="submit">View Cart</button></form> </div>';
}    
?>
