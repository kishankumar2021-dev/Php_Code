<?php
//wap in php to show table nested for loop
echo "The table 1 to 10!<br/>";
echo PHP_EOL;
echo "<table border =\"1\" style = 'border-collapse: collapse'>";
for($row=1;$row<=10; $row++){
	echo "<tr> \n";
	for($col=1;$col <=10;$col++){
		$p = $col *$row;
		
		echo"<td>$p</td> \n";
		
	}
	echo "<tr>";
}
echo "</table>";



?>