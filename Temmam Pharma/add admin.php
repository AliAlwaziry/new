<?php
session_start();
$errors = array();
$db=mysqli_connect('localhost','root','','Temmam_Pharma');

if(!$db){
    die("Connection failed: ". mysqli_connect_error());
}
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

if (isset($_POST['add'])){

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $u_name = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['copassword']);

  if ($password1 != $password2) {
      array_push($errors, "Password is not the same");
  }

 if (count($errors) == 0){
      $password= password_hash($password1,PASSWORD_DEFAULT);
      $query="insert into login_information(Name,UserName,Email,Password) Values('$name','$u_name','$email','$password')";
      mysqli_query($db,$query);
      $_SESSION['success'] = "Add Admin is Success";
      header('location: display admins.php');
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>add admin</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="" method="post" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Add New Admin</div>
                <div class="input-div">
                  <label for="name">Name:</label>
                  <input id="name" type="text" name="name" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="email">Email address:</label>
                  <input id="email" type="email" name="email" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="username">Username:</label>
                  <input id="username" type="text" name="username" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="pwd">Password:</label>
                  <input id="pwd" type="password" name="password" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="pwd1">Confirm Password:</label>
                  <input id="pwd1" type="password" name="copassword" class="input-box" required>
                </div>
                <?php include'errors.php'; ?>
                <input type="submit" value="Add" name="add" class="submit-btn">
            </div>
        </form>
    </body>
</html>
