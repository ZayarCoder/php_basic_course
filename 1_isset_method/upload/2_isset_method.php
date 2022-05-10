<?php
 $a= array("test"=> 1, "hello"=> null, "pie"=> array("a"=> "apple"));
 var_dump(isset($a["test"]));
 var_dump(isset($a["foo"]));
 var_dump(isset($a["hello"]));
 var_dump(array_key_exists("hello", $a));
 var_dump(isset($a["pie"]["a"]));
 var_dump(isset($a["pie"]["b"]));
 var_dump(isset($a["cake"]["a"]["b"]));