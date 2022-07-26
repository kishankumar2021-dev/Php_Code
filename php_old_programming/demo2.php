<?php
 $num_array = array(1,2,3,4,5);
 foreach($num_array as $value)
 {
 	echo "Array value is $value <br/>";
 }
 $num_array[0]="one";
 $num_array[1]="two";
 $num_array[2]="three";
 $num_array[3]="four";
 $num_array[4]="five";
 $num_array[5]="six";
 foreach($num_array as $value)
 {
 	echo "array value is $value <br/>";
 }
?>