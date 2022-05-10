<?php
include("db_connect.php");
$sql= "INSERT INTO test_user (firstname, lastname, email)
VALUE( 'Aung', 'Thu', 'aung@gmail.com'),
( 'Mg', 'Lwin', 'Lwin@gmail.com'),
(  ' Kyaw', ' Ko', 'kyaw@gmail.com'),
(  ' ashin', ' indavudha', 'kyaw@gmail.com'),
(  ' revat', ' Ko', 'kyaw@gmail.com')
";
if ($conn->query($sql)===TRUE) {
 echo "New record created successfully";
}else {
 echo "Error:". $sql. "<br>". $conn->error;
}
$conn->close();