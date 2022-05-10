<?php
$str= "Welcome to my humble Homepage!";
echo $str. "<br>";
echo addcslashes($str, "A..Z"). "<br>";
echo addcslashes($str, "a..z"). "<br>";
echo addcslashes($str, "a..g");