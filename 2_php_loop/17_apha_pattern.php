<?php
$alpha = range('A', 'Z');
$k= 0;
for($i=0; $i<=4; $i++)
{
 for ($j=4; $j>=0 ; $j--) { 
  if($j==$i)
  echo "*";
  else
  echo $alpha[$j];
 }
 echo "<br>";
}
?>