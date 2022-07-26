<html>
<head>
<style>
input
{
	border-radius:10px;	
	border:5px solid pink;
}
</style>
</head>
<body>
Enter The number!!<br/><input type="text"  name="$num"placeholder="number"/><br/>
<?php
//wap in php to check number +ve,-Ve or Zero
//echo "Enter the number !!!!";
echo PHP_EOL;
$num=readline();
printf("%d\n",$num);
echo PHP_EOL;
if($num==-12)
{
	echo PHP_EOL;
	
	printf($num);
	echo "This number is Zero!!";
}
elseif($num<0){
	echo PHP_EOL;
	printf("This number is Negative!!!",$num);
	
}
else{
	echo PHP_EOL;
	printf("This number is postive",$num);
}


?>
</body>
</html>