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

$query = "SELECT * FROM aboutcom WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$title2 = $row['title2'];
$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];
$img4 = $row['img4'];
$img5 = $row['img5'];
$img6 = $row['img6'];
$name1 = $row['name1'];
$name2 = $row['name2'];
$name3 = $row['name3'];
$name4 = $row['name4'];
$name5 = $row['name5'];
$name6 = $row['name6'];

if (isset($_POST['aboutcomedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title1'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title1']);
      $query_update = "UPDATE aboutcom SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['title2'])) {
      $title3 = mysqli_real_escape_string($db,$_POST['title2']);
      $query_update = "UPDATE aboutcom SET title2='$title3' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  $image1 = $_FILES['image1']['name'];
  $tmp_image1 = $_FILES['image1']['tmp_name'];
      
  if (!empty($image1)) {
      $imageExt = explode(".", $image1);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image1 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image1,"images/$image1"))
      {
          array_push($errors, "لم يتم رفع الصورة 1");
      }
      else{
          $query_update = "UPDATE aboutcom SET img1='$image1' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name1'])) {
      $name11 = mysqli_real_escape_string($db,$_POST['name1']);
      $query_update = "UPDATE aboutcom SET name1='$name11' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  $image2 = $_FILES['image2']['name'];
  $tmp_image2 = $_FILES['image2']['tmp_name'];
      
  if (!empty($image2)) {
      $imageExt = explode(".", $image2);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image2 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image2,"images/$image2"))
      {
          array_push($errors, "لم يتم رفع الصورة 2");
      }
      else{
          $query_update = "UPDATE aboutcom SET img2='$image2' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name2'])) {
      $name22 = mysqli_real_escape_string($db,$_POST['name2']);
      $query_update = "UPDATE aboutcom SET name2='$name22' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  $image3 = $_FILES['image3']['name'];
  $tmp_image3 = $_FILES['image3']['tmp_name'];
      
  if (!empty($image3)) {
      $imageExt = explode(".", $image3);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image3 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image3,"images/$image3"))
      {
          array_push($errors, "لم يتم رفع الصورة 3");
      }
      else{
          $query_update = "UPDATE aboutcom SET img3='$image3' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name3'])) {
      $name33 = mysqli_real_escape_string($db,$_POST['name3']);
      $query_update = "UPDATE aboutcom SET name3='$name33' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  $image4 = $_FILES['image4']['name'];
  $tmp_image4 = $_FILES['image4']['tmp_name'];
      
  if (!empty($image4)) {
      $imageExt = explode(".", $image4);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image4 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image4,"images/$image4"))
      {
          array_push($errors, "لم يتم رفع الصورة 4");
      }
      else{
          $query_update = "UPDATE aboutcom SET img4='$image4' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name4'])) {
      $name44 = mysqli_real_escape_string($db,$_POST['name4']);
      $query_update = "UPDATE aboutcom SET name4='$name44' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  $image5 = $_FILES['image5']['name'];
  $tmp_image5 = $_FILES['image5']['tmp_name'];
      
  if (!empty($image5)) {
      $imageExt = explode(".", $image5);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image5 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image5,"images/$image5"))
      {
          array_push($errors, "لم يتم رفع الصورة 5");
      }
      else{
          $query_update = "UPDATE aboutcom SET img5='$image5' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name5'])) {
      $name55 = mysqli_real_escape_string($db,$_POST['name5']);
      $query_update = "UPDATE aboutcom SET name5='$name55' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  $image6 = $_FILES['image6']['name'];
  $tmp_image6 = $_FILES['image6']['tmp_name'];
      
  if (!empty($image6)) {
      $imageExt = explode(".", $image6);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image6 = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      if(!move_uploaded_file($tmp_image6,"images/$image6"))
      {
          array_push($errors, "لم يتم رفع الصورة 6");
      }
      else{
          $query_update = "UPDATE aboutcom SET img6='$image6' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }

  if (!empty($_POST['name6'])) {
      $name66 = mysqli_real_escape_string($db,$_POST['name6']);
      $query_update = "UPDATE aboutcom SET name6='$name66' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Abot Company info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            height: calc(214vh - 60px);
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit aboutcom.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit About Company Information</div>
                <div class="input-div">
                  <label for="title">Title 1:</label>
                  <input id="title" type="text" name="title1" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="title2">Title 2:</label>
                  <input id="title2" type="text" name="title2" value="<?php echo $title2;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image1">First Team Memmber Image:</label>
                  <label for="img1input" class="file-upload">
                    Chose Image
                    <input id="img1input" type="file" name="image1">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name1">First Team Memmber Name:</label>
                  <input id="name1" type="text" name="name1" value="<?php echo $name1;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image2">Second Team Memmber Image:</label>
                  <label for="img2input" class="file-upload">
                    Chose Image
                    <input id="img2input" type="file" name="image2">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name2">Second Team Memmber Name:</label>
                  <input id="name2" type="text" name="name2" value="<?php echo $name2;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image3">Third Team Memmber Image:</label>
                  <label for="img3input" class="file-upload">
                    Chose Image
                    <input id="img3input" type="file" name="image3">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name3">Third Team Memmber Name:</label>
                  <input id="name3" type="text" name="name3" value="<?php echo $name3;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image4">Fourth Team Memmber Image:</label>
                  <label for="img4input" class="file-upload">
                    Chose Image
                    <input id="img4input" type="file" name="image4">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name4">Fourth Team Memmber Name:</label>
                  <input id="name4" type="text" name="name4" value="<?php echo $name4;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image5">Fifth Team Memmber Image:</label>
                  <label for="img5input" class="file-upload">
                    Chose Image
                    <input id="img5input" type="file" name="image5">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name5">Fifth Team Memmber Name:</label>
                  <input id="name5" type="text" name="name5" value="<?php echo $name5;?>" class="input-box">
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image6">Sixth Team Memmber Image:</label>
                  <label for="img6input" class="file-upload">
                    Chose Image
                    <input id="img6input" type="file" name="image6">
                  </label>
                </div>
                <div class="input-div">
                  <label for="name6">Sixth Team Memmber Name:</label>
                  <input id="name6" type="text" name="name6" value="<?php echo $name6;?>" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="aboutcomedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>