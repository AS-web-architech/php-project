<?php
include 'conn.php';
include 'bootstrap.php';
// mysqli_query()
if(isset($_POST['signup'])){

    $adminName = $_POST['adminName'];
    $adminEmail = $_POST['adminEmail'];
    $adminPhno = $_POST['$adminPhno'];
    $Apassword = sha1($_POST['Apassword']);
    
    $insert = "INSERT INTO `admin` (`admin_name`, `password`, `email`, `contact_no`, `user_id`) 
    VALUES ('$adminName',' $adminEmail','$adminPhno','$Apassword')";
    
    
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('signup Successfully!')</script>";
        
    } else
    {
        echo "<script>alert(' signup failed !')</script>";
         
    
    }
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
    
            <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" name="adminName" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="adminEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">phone n0</label>
    <input type="email" class="form-control" name="adminPhno" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="Apassword"id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="signup"  class="btn btn-primary">Sign up</button>
</form>

    
</body>
</html>