<?php
session_start();
$errors = array();
$db=mysqli_connect('localhost','root','','Temmam_Pharma');

if(!$db){
    die("Connection failed: ". mysqli_connect_error());
}
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
    $query = "SELECT * FROM login_information WHERE Email='$email' OR UserName='$email' ";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($results);
    $id = $row['id'];


    if (isset($_POST['update'])) {
        $id = $_GET['id'];

        if (!empty($_POST['name'])) {
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $query_update = "UPDATE login_information SET Name='$name' WHERE id='$id' ";
            $results_update = mysqli_query($db, $query_update);
            $query = "SELECT * FROM login_information WHERE id='$id' ";
            $results = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($results);
            $_SESSION['user'] = $row['Email'];
        }

        if (!empty($_POST['username'])) {
            $u_name = mysqli_real_escape_string($db, $_POST['username']);
            $query_update = "UPDATE login_information SET username='$u_name' WHERE id='$id' ";
            $results_update = mysqli_query($db, $query_update);
            $query = "SELECT * FROM login_information WHERE id='$id' ";
            $results = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($results);
            $_SESSION['user'] = $row['Email'];
        }

        if (!empty($_POST['email'])) {
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $query_update = "UPDATE login_information SET Email='$email' WHERE id='$id' ";
            $results_update = mysqli_query($db, $query_update);
            $query = "SELECT * FROM login_information WHERE id='$id' ";
            $results = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($results);
            $_SESSION['user'] = $row['Email'];
        }

        if (!empty($_POST['password'])) {
            $password1 = mysqli_real_escape_string($db, $_POST['password']);

            if (!empty($_POST['copassword'])) {
                $password2 = mysqli_real_escape_string($db, $_POST['copassword']);
                if ($password1 != $password2) {
                    array_push($errors, "Password is'nt same");
                } else {
                    $password= password_hash($password1, PASSWORD_DEFAULT);
                    $query_update = "UPDATE login_information SET Password='$password' WHERE id='$id' ";
                    $results_update = mysqli_query($db, $query_update);
                    $query = "SELECT * FROM login_information WHERE id='$id' ";
                    $results = mysqli_query($db, $query);
                    $row = mysqli_fetch_assoc($results);
                    $_SESSION['user'] = $row['Email'];
                }
            } else {
                array_push($errors, "Confirm Password is required");
            }
        }
        header('location: display admins.php');
    }
}
else{
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>update admin info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="update admin.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Update Admin Information</div>
                <div class="input-div">
                  <label for="name">Name:</label>
                  <input id="name" type="text" name="name" value="<?php echo $row['Name']?>" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="email">Email address:</label>
                  <input id="email" type="email" name="email" value="<?php echo $row['Email']?>" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="username">Username:</label>
                  <input id="username" type="text" name="username" value="<?php echo $row['UserName']?>" class="input-box" required>
                </div>
                <div class="input-div">
                  <label for="pwd">Password:</label>
                  <input id="pwd" type="password" name="password" class="input-box">
                </div>
                <div class="input-div">
                  <label for="pwd1">Confirm Password:</label>
                  <input id="pwd1" type="password" name="copassword" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Update" name="update" class="submit-btn">
            </div>
        </form>
    </body>
</html>