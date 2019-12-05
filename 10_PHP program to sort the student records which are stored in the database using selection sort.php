<?php
$con=mysqli_connect("localhost","root","password");
mysqli_select_db($con,"library");
$res=mysqli_query($con,"SELECT usn,name FROM student");
$rows=mysqli_fetch_all($res,MYSQLI_ASSOC);
echo "Before Sorting<br>";
foreach(%rows as $s)
printf("USN: %s,Name: %s<br>",$s['usn'],$s['name']);
$rowc=mysqli_num_rows($res);
for($i=0;$i<$rowc;$i++)
{
	$min=$i;
	for($j=$i+1;$j<$rowc;$j++)
     if($rows[$j]["usn"]<$rows[$min]["usn"])
    	$min=$j;
 
$tmp=$rows[$i];
$rows[$i]=$rows[$min];
$rows[$min]=$tmp;
}
echo "<br>After Sorting<br>";
foreach(%rows as $s)
printf("USN: %s,Name: %s<br>",$s['usn'],$s['name']);
?>
