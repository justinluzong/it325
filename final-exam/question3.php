<?php

$counter = 1;

echo "<table border=\"1\">";
while ( $counter <= 10 ) {
	echo "<tr><td>Number ";
	echo $counter;
	echo "</td></tr>";
	$counter = $counter + 2;
}
echo "</table>";	

?>
