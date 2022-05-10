<?php
$alpha = range('A', 'Z');
for($i=4; $i>=0; $i--)
{
 for($j=$i; $j>=0; $j--)
  echo $alpha[$j];
 echo "<br>";
}
?>