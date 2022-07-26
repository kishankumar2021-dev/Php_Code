<html>
<head>
<style>
table
{
	color:blue;
	border-redius:5px;
	border:5px groove aqua;
	margin:100px auto;
}
</style>
</head>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
 <?php
//wap in php to show tabule using for loops

for($i=1;$i<=6;$i++)
{
	echo "<tr>";
	
	for($j=1;$j<=5;$j++)
	{
		echo "<td>$i*$j=".$i*$j."</td>";
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>