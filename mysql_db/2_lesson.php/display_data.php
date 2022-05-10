<?php
include("db_connect.php");
include("get_data_function.php");
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
       <th>First_Name</th>
       <th>Last_Name</th>
       <th>Email</th>
       <th>Adress_at</th>
       <th>Reg_Date</th>
      </tr>
      <?php
      
$users_table_data= get_test_user_data($conn);
echo "<pre>";
var_dump($users_table_data);

      echo"</pre>";
foreach ($users_table_data as $user  ) {
echo "<tr>";
echo "<td>" .$user['id']."</td>";
echo "<td>" .$user['firstname']."</td>";
echo "<td>" .$user['lastname']."</td>";
echo "<td>" .$user['email']."</td>";
echo "<td>" .$user['adress_at']."</td>";
echo "<td>" .$user['reg_date']."</td>";

echo "</tr>";
}
      ?>
     </table> 
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h1>form</h1>
     </div>
     <div class="card-body">
      <form action="insert_process.php" method="post">
       <div class="form-group">
        <label for="firstname">First_Name</label>
        <input type="text" name="firstname" class="form-control">
       </div>
        <div class="form-group">
        <label for="firstname">Last_Name</label>
        <input type="text" name="lastname" class="form-control">
       </div>
        <div class="form-group">
        <label for="firstname">Email</label>
        <input type="text" name="email" class="form-control">
       </div>
        <div class="form-group">
       
        <input type="submit" value="Create Test User" class="btn btn-primary">
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
</html>