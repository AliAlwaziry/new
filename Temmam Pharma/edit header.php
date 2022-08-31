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
$query = "SELECT * FROM header_data WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$description = $row['description'];
$button_name = $row['button_name'];
$button_url = $row['button_url'];
$facebook = $row['facebook'];
$twitter = $row['twitter'];
$insta = $row['insta'];
$img = $row['img'];

if (isset($_POST['headeredit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE header_data SET description='$descrip' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['button_name'])) {
      $buttonName = mysqli_real_escape_string($db,$_POST['button_name']);
      $query_update = "UPDATE header_data SET button_name='$buttonName' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['button_url'])) {
      $buttonUrl = mysqli_real_escape_string($db,$_POST['button_url']);
      $query_update = "UPDATE header_data SET button_url='$buttonUrl' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['facebook'])) {
      $faceBook = mysqli_real_escape_string($db,$_POST['facebook']);
      $query_update = "UPDATE header_data SET facebook='$faceBook' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['twitter'])) {
      $Twitter = mysqli_real_escape_string($db,$_POST['twitter']);
      $query_update = "UPDATE header_data SET twitter='$Twitter' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['insta'])) {
      $Insta = mysqli_real_escape_string($db,$_POST['insta']);
      $query_update = "UPDATE header_data SET insta='$Insta' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  $image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];
  $imageSize = $_FILES['image']['size'];
      
  if (!empty($image)) {
      $imageExt = explode(".", $image);
      $imageExtension = $imageExt[1];

      if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg" || $imageExtension == "svg"){
          $image = rand(0, 100000).time().".".$imageExtension;
      }
      else {
          array_push($errors, "File should be Image");
      }
      $query_update = "UPDATE header_data SET img='$image' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
      if(!move_uploaded_file($tmp_image,"images/$image"))
      {
          array_push($errors, "لم يتم رفع الصورة");
      }
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Header info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            height: calc(130vh - 60px);
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit header.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit Header Information</div>
                <div class="input-div">
                  <label for="image">Image:</label>
                  <label for="imginput" class="file-upload">
                    Chose Header Image
                    <input id="imginput" type="file" name="image">
                  </label>
                </div>
                <div class="input-div">
                  <label for="headerDisc">Description:</label>
                  <textarea name="description" id="headerDisc" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="buttname">Button Name:</label>
                  <input id="buttname" type="text" name="buttonName" value="<?php echo $button_name;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="butturl">Button url:</label>
                  <input id="butturl" type="text" name="buttonUrl" value="<?php echo $button_url;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="faceurl">Facebook url:</label>
                  <input id="faceurl" type="text" name="facebook" value="<?php echo $facebook;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="twiturl">Twitter url:</label>
                  <input id="twiturl" type="text" name="twitter" value="<?php echo $twitter;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="instaurl">Instagram url:</label>
                  <input id="instaurl" type="text" name="insta" value="<?php echo $insta;?>" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="headeredit" class="submit-btn">
            </div>
        </form>
    </body>
</html>