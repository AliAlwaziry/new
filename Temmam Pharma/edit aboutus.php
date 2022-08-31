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

$query = "SELECT * FROM aboutus WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$question = $row['question'];
$description = $row['description'];
$vid = $row['video'];

if (isset($_POST['aboutusedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE aboutus SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['question'])) {
      $question1 = mysqli_real_escape_string($db,$_POST['question']);
      $query_update = "UPDATE aboutus SET question='$question1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE aboutus SET description='$descrip' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  $video = $_FILES['video']['name'];
  $tmp_video = $_FILES['video']['tmp_name'];
  $videoSize = $_FILES['video']['size'];
      
  if (!empty($video)) {
      $videoExt = explode(".", $video);
      $videoExtension = $videoExt[1];

      if($videoExtension == "MP4" || $videoExtension == "mp4" || $videoExtension == "WEBM" || $videoExtension == "webm"){
          $video = rand(0, 100000).time().".".$videoExtension;
      }
      else {
          array_push($errors, "File should be Video");
      }
      $query_update = "UPDATE aboutus SET video='$video' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
      if(!move_uploaded_file($tmp_video,"videos/$video"))
      {
          array_push($errors, "Video not Uploded, Try agin");
      }
      else{
          $query_update = "UPDATE aboutus SET video='$video' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Abot US info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit aboutus.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit About US Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="question">Question:</label>
                  <input id="question" type="text" name="question" value="<?php echo $question;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="video">Video:</label>
                  <label for="vidinput" class="file-upload">
                    Chose About US Video
                    <input id="vidinput" type="file" name="video">
                  </label>
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="aboutusedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>