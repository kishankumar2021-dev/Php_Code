<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Condtional operators</title>
</head>
<body>
	<?php
	$a=12;
	$b=10;
	$res=($a>$b)?$a."is greter than",$b:$b."is greter than ".$a;
	echo "The result ::$res";
	?>
</body>
</html>