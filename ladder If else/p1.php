<?php
//wap in php to if-else statement
echo "The if-else statement";
echo PHP_EOL;
$p=readline('Enter the Persentage ::
');

if($p >=80 && $p <=100){
	echo "Your are in me
	rite!!!";
}

elseif($p >=60 && $p <=80){
	echo "Your are Ist division!!!";
}

elseif($p >=45 && $p <=60){
	echo "Your are IIst division!!!";
}
elseif($p >=33 && $p <=45){
	echo "Your are IIIst division!!!";
}
elseif($p < 33){
	echo "Your are Fail";
}
else{
	echo "Please Enter Valid Persentage!!!!";
}
?>