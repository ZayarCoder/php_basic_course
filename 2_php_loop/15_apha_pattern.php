<?php
$alpha = range('A', 'Z');
$k= 0;
for($i=4; $i>=0; $i--)
{
 for($j=0; $j<=$i; $j++)
  echo $alpha[$j];
  for ($k=$i; $k <4 ; $k++) 
  echo "<div>*<div></div></div>";
  for ($m=$i; $m >=0 ; $m--)
  echo "<div> .$alpha[$m]. </div>";
 echo "<br>";
}
?>