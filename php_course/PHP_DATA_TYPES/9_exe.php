<?php

$name= "Bob";

function hello(){
 global $name;
echo $name;
}
hello();