<!DOCTYPE html>
<html>
<head>
	<title>NUMERICAL ARRAY</title>
</head>
<body>
<?php
$name   = array("kishan","kumar","CS","FINALYEAR");
foreach($name as $value){
	echo $value."</br>";
}
$name[0]="kishan";
$name[1]="kumar";
$name[2]="CS";
foreach($name as $value){
	echo "value is !     ",$value. "</br>";
}
?>
</body>
</html>
