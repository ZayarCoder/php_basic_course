<?php
$cars= array("Volvo", "BMW", "Toyota");
rsort($cars);
$ilength= count($cars);
for ($i=0; $i <$ilength ; $i++) { 
 echo $cars[$i];
 echo "<br>";
}