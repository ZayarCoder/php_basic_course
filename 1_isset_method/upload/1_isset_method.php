<?php

$var= "";
if (isset($var)) {
 echo "This var is set so I will print.";
}
$a= "test";
$b= "anothertest";
var_dump(isset($a));
var_dump(isset($a, $b));
unset($a);
var_dump(isset($a));
var_dump(isset($a, $b));
$foo= null;
var_dump(isset($foo));
echo "<br>";
$x= "";
if (isset($x)) {
 echo "Variable 'a' is set. <br>";
 
 
}
$y= null;
if (isset($y)) {
 echo "Variable 'b' is set. ";
}