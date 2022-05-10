<?php
include("db_connect.php");
function insert_data_user($conn, $data){
 $fname= $data['firstname'];
 $lname= $data['lastname'];
 $mail= $data['email'];
 $insert_user_data= "INSERT INTO film_1(`firstname`, `lastname`,`email`,`reg_date`) 
 VALUES('$fname', '$lname', '$mail', NOW());";
 $insert_user_data_result= mysqli_query($conn, $insert_user_data);
 if ($insert_user_data_result) {
  //echo "Data inserted successfully";
  header("Location: display_data.php");
 }else {
  echo "Failed to insert data";
 }
}