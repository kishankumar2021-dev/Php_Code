<?php
//wap in php to show the factorial of a number

echo "To show the factorial";

$n = 6;
$x= 1;
for ($i=1;$i<=$n-1;$i++){
	$x*=($i+1);
}
echo PHP_EOL;
echo ":$x";
?>