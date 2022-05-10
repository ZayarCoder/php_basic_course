<?php
$alpha = range('A', 'Z');
$k= 0;
for($i=0; $i<=4; $i+=2)
{
 for ($j=4; $j>=0 ; $j--) { 
  if($j>$i)
  echo "&nbsp;";
  else
  echo $alpha[$k++]. "";
 }
 echo "<br>";
}
?>