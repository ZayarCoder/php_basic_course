<?php
use LDAP\Result;
include("db_connect.php");
function get_test_uset_data($conn){
 $sql= "SELECT*FROM invoice_user";
 $result= mysqli_query($conn, $sql);
 $test_users_table_data= mysqli_fetch_all($result, MYSQLI_ASSOC);
 return $test_users_table_data;
}