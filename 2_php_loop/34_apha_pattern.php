<?php
$alpha = range('A', 'Z');
// First Part
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=0; $j--)
 {
  if($i == $j)
   echo "<div>".$alpha[$j]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 for($k=1; $k<=4; $k++)
 {
  if($i == $k)
   echo "<div>".$alpha[$k]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 echo "<br>";
}
// Second Part
for($i=3; $i>=0; $i--)
{
 for($j=4; $j>=0; $j--)
 {
  if($i == $j)
   echo "<div>".$alpha[$j]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 for($k=1; $k<=4; $k++)
 {
  if($i == $k)
   echo "<div>".$alpha[$k]."</div>";
  else
   echo "<div>&nbsp;</div>";
 }
 echo "<br>";
}
?>