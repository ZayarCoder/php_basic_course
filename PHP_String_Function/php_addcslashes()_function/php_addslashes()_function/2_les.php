<?php
$str= "Who's Petter Griffin?";
echo $str. "This is not safe in a database query. <br>";
echo addslashes($str). " This is safe in a database query.";