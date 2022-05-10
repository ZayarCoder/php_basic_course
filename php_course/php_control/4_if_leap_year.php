<?php
$year = 2022;

if($year % 4 == 0)
{
 if(($year % 100 == 0) && ($year % 400 != 0))
  echo "$year is not a leap year";
 else
  echo "$year is a leap year";
}
else
 echo "$year is not a leap year";
?>