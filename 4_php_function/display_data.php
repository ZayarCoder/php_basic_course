<?php
$host= "localhost";
$user= "root";
$pass= "";
$db= "data_db";
$conn= mysqli_connect($host, $user, $pass,$db);

// get user data function

$host = "localhost";
$user = "root";
$pass = "";
$db = "data_db";

$conn = mysqli_connect($host, $user, $pass, $db);

// get user data function
function get_users_table_data($conn)
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users_table_data;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>User Data Display</h1>
     </div>
     <div class="card-body">
     <table class="table">
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Password</th>
      </tr>
      <?php
$users_table_data = get_users_table_data($conn);
      foreach($users_table_data as $user) {
          echo "<tr>";
          echo "<td>" . $user['id'] . "</td>";
          echo "<td>" . $user['name'] . "</td>";
          echo "<td>" . $user['email'] . "</td>";
          echo "<td>" . $user['password'] . "</td>";
          echo "</tr>";
      }
      ?>
     </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
</html>

