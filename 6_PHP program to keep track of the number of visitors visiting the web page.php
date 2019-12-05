<?php
function count(){
$fn="counter.txt";
file_exists($fn) or die("Counter file not exists");
$fh=fopen($fn,"r+") or die("Could not open the file");
$c=fgets($fh)+1;
fseek($fh,0);
fputs($fh,$c);
fclose($fh);
return $c;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Visitors count</title>
</head>
<body style='background-color:#eeeeee'>
<div style='text-align:center;margin-top:150px;'>
<h2>Visitor count:
<span style='color:red'><?php echo count()?></span>
</h2>
</div>
</body>
</html>
