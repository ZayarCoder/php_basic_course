<?php
$age= array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach ($age as $i => $i_value) {
 echo "key=" .$i. ", value=" .$i_value;
 echo "<br>";
}