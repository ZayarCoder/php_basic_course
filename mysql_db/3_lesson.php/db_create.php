<?php
include("db_connect.php");
$db_cteate= "CREATE DATABASE IF NOT EXISTS`three_les`";
$db_cteate_result= mysqli_query($conn, $db_cteate);
if ($db_cteate_result) {
 echo "Database created successfully";
}else {
 echo "Fail to create database";
}