<?php
$alpha = range('A', 'Z');
for($i=1; $i<=5; $i++)
{
 for ($j=1; $j<$i*2; $j++) { 
  if($j%2==0)
  echo "*";
  else
  echo $alpha[$i-1];
 }
 echo "<br>";
}
for ($i=4; $i >=1 ; $i--) { 
 for ($j=1; $j <$i*2 ; $j++) { 
 if($j%2==0)
 echo "*";
 else
 echo $alpha[$i-1];

 }
echo "<br>";
}
?>