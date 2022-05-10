<?php
$nums= array(4,6,2,22,11);
rsort($nums);
$ilength= count($nums);
for ($i=0; $i <$ilength ; $i++) { 
 echo $nums[$i];
 echo "<br>";
}