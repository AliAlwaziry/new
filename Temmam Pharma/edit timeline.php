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

$query = "SELECT * FROM timeline WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$date1 = $row['date1'];
$date2 = $row['date2'];
$date3 = $row['date3'];
$date4 = $row['date4'];
$date5 = $row['date5'];
$event1 = $row['event1'];
$event2 = $row['event2'];
$event3 = $row['event3'];
$event4 = $row['event4'];
$event5 = $row['event5'];


if (isset($_POST['timelineedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE timeline SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE timeline SET description='$descrip' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['date1'])) {
      $date11 = mysqli_real_escape_string($db,$_POST['date1']);
      $query_update = "UPDATE timeline SET date1='$date11' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['date2'])) {
      $date22 = mysqli_real_escape_string($db,$_POST['date2']);
      $query_update = "UPDATE timeline SET date2='$date22' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['date3'])) {
      $date33 = mysqli_real_escape_string($db,$_POST['date3']);
      $query_update = "UPDATE timeline SET date3='$date33' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['date4'])) {
      $date44 = mysqli_real_escape_string($db,$_POST['date4']);
      $query_update = "UPDATE timeline SET date4='$date44' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['date5'])) {
      $date55 = mysqli_real_escape_string($db,$_POST['date5']);
      $query_update = "UPDATE timeline SET date5='$date55' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['event1'])) {
      $event11 = mysqli_real_escape_string($db,$_POST['event1']);
      $query_update = "UPDATE timeline SET event1='$event11' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['event2'])) {
      $event22 = mysqli_real_escape_string($db,$_POST['event2']);
      $query_update = "UPDATE timeline SET event2='$event22' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['event3'])) {
      $event33 = mysqli_real_escape_string($db,$_POST['event3']);
      $query_update = "UPDATE timeline SET event3='$event33' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['event4'])) {
      $event44 = mysqli_real_escape_string($db,$_POST['event4']);
      $query_update = "UPDATE timeline SET event4='$event44' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['event5'])) {
      $event55 = mysqli_real_escape_string($db,$_POST['event5']);
      $query_update = "UPDATE timeline SET event5='$event55' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Timeline info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            height: calc(187vh - 60px);
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit timeline.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit Timeline Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="date1">First Point Date:</label>
                  <input id="date1" type="text" name="date1" value="<?php echo $date1;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="event1">First Point event:</label>
                  <input id="event1" type="text" name="event1" value="<?php echo $event1;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="date2">Second Point Date:</label>
                  <input id="date2" type="text" name="date2" value="<?php echo $date2;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="event2">Second Point event:</label>
                  <input id="event2" type="text" name="event2" value="<?php echo $event2;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="date3">Third Point Date:</label>
                  <input id="date3" type="text" name="date3" value="<?php echo $date3;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="event3">Third Point event:</label>
                  <input id="event3" type="text" name="event3" value="<?php echo $event3;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="date4">Fourth Point Date:</label>
                  <input id="date4" type="text" name="date4" value="<?php echo $date4;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="event4">Fourth Point event:</label>
                  <input id="event4" type="text" name="event4" value="<?php echo $event4;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="date5">Fifth Point Date:</label>
                  <input id="date5" type="text" name="date5" value="<?php echo $date5;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="event5">Fifth Point event:</label>
                  <input id="event5" type="text" name="event5" value="<?php echo $event5;?>" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="timelineedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>