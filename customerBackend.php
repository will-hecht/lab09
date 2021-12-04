<style>
	<?php include 'lab9exercise3style.css'; ?>
</style>
<?php
	$burgerCount = $_POST["burgers"];
	$burgerPrice = 7*$burgerCount;
	$fryCount = $_POST["fries"];
	$fryPrice = 3*$fryCount;
	$drinkCount = $_POST["drinks"];
	$drinkPrice = 2*$drinkCount;
	$userName = $_POST["username"];
	$password = $_POST["password"];
	$shippingType = $_POST["shipping"];
	if($shippingType == "free") {
		$shippingText = "Free Shipping";
		$shippingPrice = 0;
	}
	else if($shippingType == "three") {
		$shippingText = "Three Day Shipping";
		$shippingPrice = 5;
	}
	else if($shippingType == "overnight") {
		$shippingText = "Overnight Shipping";
		$shippingPrice = 50;
	}
	else {
		$shippingText = "Shipping Type Not Found";
		$shippingPrice = 0;
	}
	$totalPrice = $shippingPrice + $burgerPrice + $fryPrice + $drinkPrice;
	echo "<p>Welcome " . $userName . "!";
	echo "<br>";
	echo "<p>Here is your Password: " . $password;
	echo "<br><br>";
	echo "<table border = 1";
	echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
	echo "<tr><th>Cheeseburgers</th><td>" . $burgerCount . "</td><td>$7</td><td>$" . $burgerPrice . "</td></tr>";
	echo "<tr><th>Fries</th><td>" . $fryCount . "</td><td>$3</td><td>$" . $fryPrice . "</td></tr>";
	echo "<tr><th>Drinks</th><td>" . $drinkCount . "</td><td>$2</td><td>$" . $drinkPrice . "</td></tr>";
	echo "<tr><th>Shipping</th><td colspan = 2>" . $shippingText . "</td><td>$" . $shippingPrice . "</td></tr>";
	echo "<tr><th colspan = 3>Total Cost</th><th>$" . $totalPrice . "</th></tr>";
?>