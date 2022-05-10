<?php
include("db_connect.php");
function insert_data_user($conn, $data){
 $fname= $data['firstname'];
 $lname= $data['lastname'];
 $mail= $data['email'];
 $insert_user_data= "INSERT INTO users(`firstname`, `lastname`,`email`,`reg_date`) 
 VALUES('$fname', '$lname', '$mail', NOW());";
 $insert_user_data_result= mysqli_query($conn, $insert_user_data);
 if ($insert_user_data_result) {
  //echo "Data inserted successfully";
  header("Location:display_data.php");
 }else {
  echo "Failed to insert data";
 }
}

// user update function
function update_data_user($conn, $data) {
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $id = $_GET['id'];
    $update_user_data = "UPDATE `users` SET `firstname` = '$firstname', `email` = '$email', `lastname` = '$lastname' WHERE `id` = '$id';";
    $update_data = mysqli_query($conn, $update_user_data);
    if ($update_data) {
        //return true;
        header("Location: display_data.php");
    }else{
        //return false;
        echo "Failed to update data";
    }

}

// user delete fucntion
function delete_data_user($conn, $id) {
    $delete_user_data = "DELETE FROM `users` WHERE `id` = '$id';";
    $delete_data = mysqli_query($conn, $delete_user_data);
    if ($delete_data) {
        //return true;
        header("Location: display_data.php");
    }else{
        //return false;
        echo "Failed to delete data";
    }
}