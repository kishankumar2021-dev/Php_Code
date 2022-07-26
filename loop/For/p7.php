<?php
//wap in php to count charecter 
echo "!!!! Count cherecter!!!" ;
$text="azamgarh";
$search="a";
$count="0";
for ($x="0"; $x<strlen($text);$x++){
	if(substr($text,$x,1)==$search){
		$count=$count+1;
	}
}
echo $count."\n";
?>