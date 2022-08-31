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
        <title>Remove Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'navbar.php';?>
        <form id="form" action="" method="post" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Remove Admin</div>
                <div class="input-div">
                  <label for="name">Enter Email or Username or Full Name of admin you want to delete</label>
                  <input id="name" placeholder="Email, Username, Full Name" type="text" name="RemoveVariable" class="input-box">
                </div>
                <input type="submit" value="Check admin" name="RemoveCheck" class="submit-btn submit-margin"><br>
                <?php 
                if(isset($_POST['RemoveCheck'])){
                    $removeVar = mysqli_real_escape_string($db, $_POST['RemoveVariable']);
                    if (empty($removeVar)) {
                        array_push($errors, "The input filled is empty");
                        echo "The input filled is empty";
                    }

                    if (count($errors) == 0){
                        $query = "SELECT * FROM login_information WHERE Name = '$removeVar' OR UserName = '$removeVar' OR Email = '$removeVar' ";
                        $results = mysqli_query($db, $query);
                        
                        if (mysqli_num_rows($results) == 1) {
                            echo "The Deleted Admin Information is:";
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
                                while($row=mysqli_fetch_assoc($results)){
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
                            $query = "DELETE FROM login_information WHERE Name = '$removeVar' OR UserName = '$removeVar' OR Email = '$removeVar' ";
                            $results = mysqli_query($db, $query);
                            $query1 = "ALTER TABLE login_information DROP id";
                            $results1 = mysqli_query($db, $query1);
                            $query2 = "ALTER TABLE login_information ADD id INT(4) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id)";
                            $results2 = mysqli_query($db, $query2);
                            echo "Remove is success";
                        }
                        else{
                            echo "Admin not exist, Check your input";
                        }
                    }
                }
                ?>

            </div>
        </form>
    </body>
</html>