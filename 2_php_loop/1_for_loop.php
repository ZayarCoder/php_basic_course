<?php 
// for loop
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Ford", "Mazda");
$arr_length = count($cars);
for ($i=0; $i < $arr_length; $i++) { 
  echo $cars[$i] . "<br>";
}


echo "<br>";
echo "<hr>";

$fruits = array("apple", "banana", "orange", "strawberry");
for ($i=0; $i < count($fruits) ; $i++) { 
  echo $fruits[$i] . "<br>";
}

echo "<br>";
echo "<hr>";

for ($i=200; $i > 100; $i--) { 
  echo $i . "<br>";
}

/*

for ($i=0; $i < ; $i++) { 
 # code...
}
<?php
for (initialize; condition; increment){

//code to be executed

}
?>

*/