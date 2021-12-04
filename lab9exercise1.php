<?php
	function product($x, $y) {
		$z = $x * $y;
		return $z;
	}
	
	echo "<table border = 1>";

	echo "<tr><td></td>";
	for($i = 1; $i <= 100; $i++) {
		echo "<td> $i </td>";
	}
	echo "</tr>";

	for($i = 1; $i <= 100; $i++) {
		echo "<tr><td>$i</td>";
		for($j = 1; $j <= 100; $j++) {
			echo "<td>" . product($i,$j) . "</td>";
		}
		echo "</tr>";
	}	
?>
	
