<?php
include("db_connect.php");
$sql= "INSERT INTO myanmar_user(firstname, lastname, email, adress_at)
VALUE('Khin', 'Lay', 'lay@gmail.com', 'Mandalay'),
('Mon', 'Thaw', 'mon@gmail.com', 'Mandalay'),
('Dar', 'Dar', 'dar@gmail.com', 'Mandalay')
";
if ($conn->query($sql)===TRUE) {
 echo "New record created successfully";
}else {
 echo "Error:". $sql. "<br>". $conn->error;
}
