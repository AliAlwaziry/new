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
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desplay Admins List</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="table">
      <h1>Admins List</h1>
      <?php
        $query="SELECT * FROM login_information";
        $results = mysqli_query($db, $query);
        echo "<table>";
          echo "<thead>";
            echo "<tr>";
              echo "<th>No.</th>";
              echo "<th>Name</th>";
              echo "<th>Username</th>";
              echo "<th>Email</th>";
            echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
            while($row=mysqli_fetch_array($results)){
              $id=$row['id'];
              $name=$row['Name'];
              $username=$row['UserName'];
              $email=$row['Email'];
              echo "<tr>";
              echo "<td>$id</td>";
              echo "<td>$name</td>";
              echo "<td>$username</td>";
              echo "<td>$email</td>";
              echo "</tr>";
            }
          echo "</tbody>";
        echo "</table>";
      ?>
    </div>
  </body>
</html>
