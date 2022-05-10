<?php 
include("db_connect.php");

function insert_data_user($conn, $data) {
    $name = $data['firstname'];
    $email = $data['lastname'];
    $password = $data['email'];
    $insert_user_data = "INSERT INTO test_user (`firstname`, `lastname`, email, `reg_date`) VALUES
    ('$name', '$email', '$password', Now());";
    $insert_user_data_result = mysqli_query($conn, $insert_user_data);
    if ($insert_user_data_result) {
        //echo "Data inserted successfully";
       header("Location: display_data.php");
    }else{
        echo "Failed to insert data";
    }
}