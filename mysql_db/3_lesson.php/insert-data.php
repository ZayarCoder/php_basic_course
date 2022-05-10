<?php
include("db_connect.php");
$sql= "INSERT INTO invoice_user(firstname, lastname, email, adress_at)
VALUE('Aung Kaung','Man', 'man@gmail.com', 'Yangon' ),
('David','Htan', 'David@gmail.com', 'Yangon' ),
('San Sit','Naing', 'Sit@gmail.com', 'Yangon' )
";
if ($conn->query($sql)===TRUE) {
 echo "New record created successfully";
}else {
 echo "Error:".$sql. "<br>". $conn->error;
}
$conn->close();