<?php
$alpha = range('A', 'Z');
$k=0;
for ($i=0; $i <=4 ; $i++) { 
for ($j=4; $j>=$i; $j--) 
echo$alpha[$k++]. " ";
echo "<br>";
}