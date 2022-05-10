<?php
include("db_connect.php");
$db_create= "CREATE DATABASE IF NOT EXISTS `two_les`";
$db_create_result= mysqli_query($conn, $db_create);
if ($db_create_result) {
 echo "Database create successfully";
}else {
 echo "Failed to create database";
}