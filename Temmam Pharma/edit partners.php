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

$query = "SELECT * FROM partners WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];
$img4 = $row['img4'];
$img5 = $row['img5'];

if (isset($_POST['partnersedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE partners SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE partners SET description='$descrip' WHERE id='$id' ";
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
          $query_update = "UPDATE partners SET img1='$image1' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
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
          $query_update = "UPDATE partners SET img2='$image2' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
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
          $query_update = "UPDATE partners SET img3='$image3' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
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
          $query_update = "UPDATE partners SET img4='$image4' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
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
          $query_update = "UPDATE partners SET img5='$image5' WHERE id='$id' ";
          $results_update = mysqli_query($db, $query_update);
      }
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Partners info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            height: calc(140vh - 60px);
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit partners.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit partners Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="image1">First Partner Image:</label>
                  <label for="img1input" class="file-upload">
                    Chose Image
                    <input id="img1input" type="file" name="image1">
                  </label>
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image2">Second Partner Image:</label>
                  <label for="img2input" class="file-upload">
                    Chose Image
                    <input id="img2input" type="file" name="image2">
                  </label>
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image3">Third Partner Image:</label>
                  <label for="img3input" class="file-upload">
                    Chose Image
                    <input id="img3input" type="file" name="image3">
                  </label>
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image4">Fourth Partner Image:</label>
                  <label for="img4input" class="file-upload">
                    Chose Image
                    <input id="img4input" type="file" name="image4">
                  </label>
                </div>
                <div>---------------------------------------------------------------------------------------------</div>
                <div class="input-div">
                  <label for="image5">Fifth Partner Image:</label>
                  <label for="img5input" class="file-upload">
                    Chose Image
                    <input id="img5input" type="file" name="image5">
                  </label>
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="partnersedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>