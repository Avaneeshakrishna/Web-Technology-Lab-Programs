<?php
function compute($a,$op,$b)
{
	switch($op)
	{
		case '+':return $a+$b;
	}
}
function matrix_print($m)
{
	for($i=0;$i<3;$i++)
	{
		
	for($j=0;$j<3;$j++)
	{
		echo $m[$i][$j]."&nbsp;&nbsp;";
	}
	echo "<br>";
	}
}
function matrix_sum($a,$b)
{
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		{
			$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
		}
	}
	return $c;
}
function matrix_product($a,$b)
{
	for($i=0;$i<3;$i++)
	{
		
	for($j=0;$j<3;$j++)
	{
		$c[$i][$j]=0;
		for($k=0;$k<3;$k++)
		{
			$c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
		}
	}
	}
	return $c;
}
function matrix_transpose($a)
{
	for($i=0;$i<3;$i++)
	{
		
	for($j=0;$j<3;$j++)
	{
		$b[$i][$j]=$a[$j][$i];
	}
	}
	return $b;
}
?>

		