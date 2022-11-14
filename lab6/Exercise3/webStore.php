<style>
<?php include 'style.css';
?>
</style>
<?php 

$username = $_POST["onlineid"];
$shipping = $_POST["choice"];

    $password = $_POST["passcode"];
    $kit1 = $_POST["kit1"];
    $kit2 = $_POST["kit2"];
    $kit3 = $_POST["kit3"];
    
    echo "<p>Welcome To The Post-Purchase Page!</p>";
    echo "<p>The password you entered is: $password </p>";
    echo "<br>";
    
    $shippingcharge=0;

    if($shipping=="7days")
    {
        $shippingcharge=0;
    }


    else if($shipping=="overnight")
    {
        $shippingcharge=50;
    }

    else if($shipping=="3days")
    {
        $shippingcharge=5;
    }
    
    $kit1price=$kit1*150;
    $kit2price=$kit2*100;
    $kit3price=$kit3*120;

$total=$shippingcharge+$kit1price+$kit2price+$kit3price;
echo "<h2>Receipt:</h2>";


echo "
 <table>
	<tr>	
		<th class='green'>            </th>
		<th class='green'>Quantity</th>
		<th class='green'>Cost Per Item</th>
		<th class='green'>Sub Total</th>
	</tr>";

	echo "<tr>
		<th class='blue'>Real Madrid Kit</th>
		<td class='purple'>$kit1</td>
		<td class='purple'>$150</td>
		<td class='purple'>$$kit1price</td>
	</tr>";
	echo "<tr>
		<th class='blue'>PSG Kit</th>
		<td class='purple'>$kit2</td>
		<td class='purple'>$100</td>
		<td class='purple'>$$kit2price</td>
	</tr>";
echo "<tr>
		<th class='blue'>Man City Kit</th>
		<td class='purple'>$kit3</td>
		<td class='purple'>$120</td>
		<td class='purple'>$$kit3price</td>
	</tr>";
	
echo "<tr>
		
		<th class='blue'>Shipping</th>
		<td class='purple' colspan='2'>$shipping</td>
		<td class='purple'>$$shippingcharge</td>
</tr>";
echo "<tr>
		
		<th class='green' colspan='3'>Total Cost</th>
		<td class='purple'>$$total</td>
</tr>";


echo "</table>";
?>