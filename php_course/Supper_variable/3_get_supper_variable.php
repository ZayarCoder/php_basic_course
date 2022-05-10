<?php
if($_GET["name"] || $_GET["email"]) {
 echo "Welcome" . $_GET["name"] . "<br>";
 echo "Welcome" . $_GET["email"] . "<br>";
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" mathod= "GET">
<div class="row">
 <label for="name">Name :</label>
 <input type="text" name="name">
</div>
<div class="form-group">
 <label for="email">Email :</label>
 <input type="text" name="email">
 <br>
 <br>
 <input type="submit" value="Submit" name="upload_data">
</div>



</form> 
</body>
</html>