<?php
//wap in php to show K text using nested loop
$j=5;
$i=0;
for($row=0; $row<=7; $row++)
{
	for($column=0;$column<=7; $column++)
	{
		if($column == 1 or (($row ==$column +1)and $column !=0))
			echo "*";
		else if ($row == $i and $column == $j)
		{
			echo "*";
			$i=$i+1;
			$j=$j-1;
		}
		else
			echo " ";
	}
	echo "\n";
}

?>