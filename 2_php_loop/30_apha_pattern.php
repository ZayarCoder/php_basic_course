<?php
$alpha = range('A', 'Z');
$k=4;
for($i=0; $i<=4; $i++)
{
 for ($j=$i; $j>0; $j--) 
 echo $alpha[$j];
 for ($k=0; $k <=4-$i ; $k++) 
 echo $alpha[$k];
 echo "<br>";
}
?>