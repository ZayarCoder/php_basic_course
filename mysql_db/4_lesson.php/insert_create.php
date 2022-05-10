<?php
include("db_connect.php");
$sql= "INSERT INTO voucher(firstname, lastname, email, adress_at)
VALUE('Aung Kaung','Man', 'man@gmail.com', 'Yangon' ),
('David','Htan', 'David@gmail.com', 'Yangon' ),
('San Sit','Naing', 'Sit@gmail.com', 'Yangon' )
";
if ($conn->query($sql)===TRUE) {
 echo "new record creating successfully";
}else {
 echo "error:".$sql. "<br>". $conn->error;
}