<?php
//wap in php to show Pattern using for nested loops
echo "This is a Using for nested loops";
echo "<br/>";
//$n=5;
for($i=1;$i<=5;$i++){
		
	for($j=1;$j<=$i;$j++){
		echo PHP_EOL;
		echo "*";		
	}
	echo "<br/>";
		
}
for($i=5;$i>=1;$i--){
	
	for($j=1;$j<=$i;$j++){
		echo PHP_EOL;
		echo "*";
	}
	echo "<br/>";
}
?>