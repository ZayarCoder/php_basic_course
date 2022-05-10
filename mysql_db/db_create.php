<?php
// create database
include("db_connect.php");
$db_create = "CREATE DATABASE IF NOT EXISTS `test_db`";
$db_create_result = mysqli_query($conn, $db_create);

if ($db_create_result) {
   echo "Database created successfully";
}else{
   echo "Failed to create database";
}