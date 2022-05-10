<?php
$alpha = range('A', 'Z');
for($i=4; $i>=0; $i--)
{
 for ($j=0; $j<$i; $j++)  
  echo "&nbsp;&nbsp;&nbsp;&nbsp;";
  for ($j=4; $j >=$i ; $j--)
   echo$alpha[$j]. "&nbsp;"; 
 echo "<br>";
}
?>