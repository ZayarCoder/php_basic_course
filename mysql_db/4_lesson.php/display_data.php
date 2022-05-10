<?php
include("db_connect.php");
include("get_data_function.php")



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
   <div class="col_lg_8">
    <div class="card">
     <div class="card-header">
      <h1>User Data Display</h1>
     </div>
     <div class="card_body">
      <table class="table">
       <tr>
        <th>ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Email</th>
       <th>adress_at</th>
       <th>Reg_date</th>
        </tr>
       <?php
 $users_table_data= get_test_user_data($conn);
       ?>
      
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
</html>