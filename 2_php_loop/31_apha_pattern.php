<?php
$alpha = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for ($j=0; $j<=4; $j++) { 
  if($i==$j)
  echo $alpha[$j];
  else
  echo "&nbsp;&nbsp;";
 }
 for ($k=3; $k>=0; $k--) { 
  if($i==$k)
  echo $alpha[$k];
  else
  echo "&nbsp;&nbsp;";
 }
 echo "<br>";
}
?>