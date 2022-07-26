<!...  use of array in php ...!>
<?php
$arr=array(10,10=>20,30,'student'=>"kishan kumar",3.4);
array_pop($arr,40);
array_push($arr);

//echo $arr[0];
//print the hole value in function
//assosiative array
echo $arr['student'];
//print_r($arr);
?>
