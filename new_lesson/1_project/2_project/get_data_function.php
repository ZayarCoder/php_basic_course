<?php
use LDAP\Result;
include("db_connect.php");
function get_test_user_data($conn){
 $sql= "SELECT * FROM film_1";
 $result= mysqli_query($conn, $sql);
 $test_users_table_data= mysqli_fetch_all($result, MYSQLI_ASSOC);
 return $test_users_table_data;
}