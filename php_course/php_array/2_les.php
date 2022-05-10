<?php
$cars= array("Volvo", "BMW", "Toyota", "23", 45, 456);
echo "I like" . $cars[0] . "," .$cars[1] . "and" . $cars[2] . ".";
echo "<br>";
echo "<hr>";
$array_length = count($cars);

// for(){

// }
for ($i=0; $i < $array_length ; $i++) { 
 echo $cars[$i];
 echo "<br>";
}

echo "<br>";
echo "<hr>";

for ($i=0; $i < count($cars) ; $i++) { 
 echo $cars[$i];
 echo "<br>";
}

echo "<br>";
echo "<hr>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";
echo "<hr>";

foreach ($age as $key => $value) {
 echo "Key".$key . "value".$value . "<br>" ;
}
