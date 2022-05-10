<?php 
include("db_connect.php");
$sql = "INSERT INTO admins (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com'),
('ashin', 'indavudha', 'ashin@gmail.com'),
('mgmg', 'kyaw', 'kyaw@gmail.com'),
('ko', 'ko', 'koko@gmail.com')
";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();