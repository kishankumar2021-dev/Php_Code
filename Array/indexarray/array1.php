<?php

$number = array(11,23,34,54,13,32);

sort($number);

$clength = count($number);

for($x=0; $x<$clength;$x++){
   echo $number[$x];

   echo '<br>';
}

?>