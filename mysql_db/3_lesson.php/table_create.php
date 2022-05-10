<?php
include("db_connect.php");
$sql= "CREATE TABLE invoice_user(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(200) NOT NULL,
lastname VARCHAR(200) NOT NULL,
email VARCHAR(50),
adress_at TEXT NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if ($conn->query($sql)===TRUE) {
 echo "Table invoice_user created successfully";
}else {
 echo "Error creating table:".$conn->error;
}
$conn->close();