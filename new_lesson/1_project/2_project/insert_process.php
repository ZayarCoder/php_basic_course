<?php
include("db_connect.php");
include("function.php");
$data= [
'firstname'=> $_POST['firstname'],
'lastname'=> $_POST['lastname'],
'email'=> $_POST['email']
];
$table= insert_data_user($conn, $data);
if ($table) {header(
 "location: display_data.php");
}else {
 echo "Failed to insert data";
}