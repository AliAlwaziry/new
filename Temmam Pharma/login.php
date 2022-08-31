<?php
session_start();
$errors = array();
$db=mysqli_connect('localhost','root','','Temmam_Pharma');

if(!$db){
    die("Connection failed: ". mysqli_connect_error());
}

if (isset($_POST['login'])){
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if(!empty($_POST['remember']))
  {
      $remember = "1";
  }

  if (empty($email)) {
      array_push($errors, "Email is Required");
  }

  if (empty($password)) {
      array_push($errors, "Password is Required");
  }
  if (count($errors) == 0){
      $query = "SELECT * FROM login_information WHERE Email = '$email' OR UserName = '$email' ";
      $results = mysqli_query($db, $query);
      
      if (mysqli_num_rows($results) == 1) {
          $row = mysqli_fetch_assoc($results);
          if (password_verify($password, $row['Password'])){
              session_start();
              $_SESSION['user'] = $email;

              if ($remember == 1) {
                  setcookie('email',$email,time()+60*60*24*10,"/");
                  setcookie('password',$password,time()+60*60*24*10,"/");
              }
              header('location: display admins.php');
          }
          else {
              array_push($errors, "Password is wrong");
          }
      }
      else{
          array_push($errors, "Email or Username is wrong");
      }
  }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            display: none !important;
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form action="" method="post" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Login</div>
                <div class="input-div">
                  <label for="email">Email or Username:</label>
                  <input id="email" type="text" placeholder="Enter Email or Username" name="email" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="pwd">Password:</label>
                  <input id="pwd" type="password" placeholder="Enter the Password" name="password" class="input-box" required>
                </div>
                <div class="input-div">
                    <label class="rem-lab" for="remember">Remember Me</label>
                    <input id="remember" type="checkbox" name="remember" <?php if (isset($remember) && $remember=="1") echo "checked";?> value="1" class="checkbox">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Login" name="login" class="submit-btn">
            </div>
        </form>
    </body>
</html>