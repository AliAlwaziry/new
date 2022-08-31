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

$query = "SELECT * FROM contactus WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$facebook = $row['facebook'];
$twitter = $row['twitter'];
$insta = $row['insta'];
$number = $row['number'];

if (isset($_POST['contactusedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE contactus SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['facebook'])) {
      $facebook1 = mysqli_real_escape_string($db,$_POST['facebook']);
      $query_update = "UPDATE contactus SET facebook='$facebook1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['twitter'])) {
      $twitter1 = mysqli_real_escape_string($db,$_POST['twitter']);
      $query_update = "UPDATE contactus SET twitter='$twitter1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['insta'])) {
      $insta1 = mysqli_real_escape_string($db,$_POST['insta']);
      $query_update = "UPDATE contactus SET insta='$insta1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['number'])) {
      $number1 = mysqli_real_escape_string($db,$_POST['number']);
      $query_update = "UPDATE contactus SET number='$number1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Contact US info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit contactus.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit Contact US Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="facebook">Facebook URL:</label>
                  <input id="facebook" type="text" name="facebook" value="<?php echo $facebook;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="twitter">Twitter URL:</label>
                  <input id="twitter" type="text" name="twitter" value="<?php echo $twitter;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="insta">Instagram URL:</label>
                  <input id="insta" type="text" name="insta" value="<?php echo $insta;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="number">Phone Number:</label>
                  <input id="number" type="text" name="number" value="<?php echo $number;?>" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="contactusedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>