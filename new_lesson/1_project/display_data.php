<?php
include("db_connect.php");
include("get_data_funcntion.php")


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
     <table class="table table-dark table-striped">
      <tr>
       <th>ID</th>
       <th>First_Name</th>
       <th>Last_Name</th>
       <th>Email</th>
       <th>Reg_date</th>
      </tr>
      <?php
$users_table_data= get_test_user_data($conn);
foreach ($users_table_data as $user  ) {
 echo "<tr>";
echo "<td>" .$user['id'] ."</td>";
echo "<td>".$user['firstname']."</td>";
echo "<td>".$user['lastname']."</td>";
echo "<td>".$user['email']."</td>";
echo "<td>".$user['reg_date']."</td>";
echo "<td>";
echo "<a href='edit_user_form.php?id=" . $user['id'] . "' class='btn btn-primary'>Edit</a>";
echo "<a href='user_delete.php?id=" . $user['id'] . "' class='btn btn-danger'>Delete</a>";
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
     <h1>Form</h1>
    </div>
    <div class="card-body">
     <form action="insert_process.php" method="POST">
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