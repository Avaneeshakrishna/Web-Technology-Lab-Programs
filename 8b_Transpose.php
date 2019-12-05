<?php
include "8_lib.php";
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=matrix_transpose($a);
echo "<br>Original Matrix A <br>";
matrix_print($a);
echo "<br>Matrix Transpose A <sup>T</sup><br>";
matrix_print($b);
?>
