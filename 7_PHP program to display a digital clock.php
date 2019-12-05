<?PHP
function getTime()
{
return date("g:i:s A",time());
}
?>
<!DOCTYPE html>
<head>
<title>Digital Clock</title>
<meta http-equiv="Refresh" content="1"/>
</head>
<body style='background-color:#eeeeee'>
<div style='text-align:center;margin-top:150px'>
<h2>Time:
<span style='color:red'><?php echo getTime()?></span>
</h2>
</div>
</body>
</html>