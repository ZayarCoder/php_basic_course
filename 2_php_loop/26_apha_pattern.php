<?php
$alpha = range('A', 'Z');
$k=0;
for ($i=0; $i <=4 ; $i++) { 
 for ($j=$i; $j <=4 ; $j++)
 echo$alpha[$j];
 for ($k=$i; $k >0 ; $k--) 
 echo$alpha[$k-1];
 echo "<br>";
}