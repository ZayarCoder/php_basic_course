<?php
$start = 10;
$end = 25;

echo "Odd numbers between $start and $end: <br>";
for($start=$start; $start<=$end; $start++)
{
 if($start % 2 != 0)
  echo "$start ";
}
?>