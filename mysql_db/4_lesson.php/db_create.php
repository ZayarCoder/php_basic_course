<?php

include("db_connect.php");

$db_create= "CREATE DATABASE IF NOT EXISTS `four_les`";
$db_create_result= mysqli_query($conn, $db_create);
if ($db_create_result) {
 echo "Databse created successfully";
}else {
 echo "Failed to created database";
}