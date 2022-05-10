<?php
$alpha = range('A', 'Z');
$k= 0;
for($i=0; $i<=9; $i+=2)
{
 for($j=0; $j<=$i; $j++)
  echo $alpha[$j];
 echo "<br>";
}
?>