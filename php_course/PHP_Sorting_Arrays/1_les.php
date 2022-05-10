<?php
$cars= array("Volvo", "BMW", "Toyota");
sort($cars);
$ilength= count($cars);
for ($i=0; $i <$ilength ; $i++) { 
 echo $cars[$i];
 echo "<br>";
}