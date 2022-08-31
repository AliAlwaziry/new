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

$query = "SELECT * FROM strategy WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$img = $row['img'];

if (isset($_POST['strategyedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE strategy SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE strategy SET description='$descrip' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  $image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];
      
  if (!empty($image)) {
      $imageExt = explode(".", $image);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg"){
          $image = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image,"images/$image"))
      {
          array_push($errors, "لم يتم رفع الصورة");
      }
      else{
          $query_update = "UPDATE strategy SET img='$image' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Strategy info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit strategy.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit Strategy Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="image">Image:</label>
                  <label for="imginput" class="file-upload">
                    Chose Strategy Image
                    <input id="imginput" type="file" name="image">
                  </label>
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="strategyedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>