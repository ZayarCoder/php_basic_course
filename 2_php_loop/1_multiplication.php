<?php
$table = 9;
$length = 10;
$i = 1;

echo "Multiplication table: $table <br>";
for($i=1; $i<=$length; $i++)
{
 echo "$table x $i = " . $table * $i . "<br>";
}