<?php
$even = " ";
$odd = " ";
$i=0;
do
{
	if($i%2==0){
		echo PHP_EOL;
		echo "The number $i is  even<br/>";
	}
	else
	{
		echo PHP_EOL;
		echo "Thw number $i is odd<br/>";
		
	}$i++;
	
	
}
while($i<=20);
echo "The Even no=".$even."<br/>";
echo "The odd no=".$odd."<br/>";
?>