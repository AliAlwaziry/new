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

$query = "SELECT * FROM welcome WHERE id = 1 ";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$agent_num = $row['agent_num'];
$agent_name = $row['agent_name'];
$emp_num = $row['emp_num'];
$emp_name = $row['emp_name'];
$brunch_num = $row['branch_num'];
$brunch_name = $row['brunch_name'];
$customer_num = $row['customer_num'];
$customer_name = $row['customer_name'];

if (isset($_POST['welcomeedit'])) {
  $id = $_GET['id'];

  if (!empty($_POST['title'])) {
      $title1 = mysqli_real_escape_string($db,$_POST['title']);
      $query_update = "UPDATE welcome SET title='$title1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

  if (!empty($_POST['description'])) {
      $descrip = mysqli_real_escape_string($db,$_POST['description']);
      $query_update = "UPDATE welcome SET description='$descrip' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  
  if (!empty($_POST['agentnumber'])) {
      $agent_num1 = mysqli_real_escape_string($db,$_POST['agentnumber']);
      $query_update = "UPDATE welcome SET agent_num='$agent_num1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['agentname'])) {
      $agent_name1 = mysqli_real_escape_string($db,$_POST['agentname']);
      $query_update = "UPDATE welcome SET agent_name='$agent_name1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['empnum'])) {
      $emp_num1 = mysqli_real_escape_string($db,$_POST['empnum']);
      $query_update = "UPDATE welcome SET emp_num='$emp_num1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['empname'])) {
      $emp_name1 = mysqli_real_escape_string($db,$_POST['empname']);
      $query_update = "UPDATE welcome SET emp_name='$emp_name1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['brunchnum'])) {
      $brunch_num1 = mysqli_real_escape_string($db,$_POST['brunchnum']);
      $query_update = "UPDATE welcome SET branch_num='$brunch_num1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['brunchname'])) {
      $brunch_name1 = mysqli_real_escape_string($db,$_POST['brunchname']);
      $query_update = "UPDATE welcome SET brunch_name='$brunch_name1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['customernum'])) {
      $customer_num1 = mysqli_real_escape_string($db,$_POST['customernum']);
      $query_update = "UPDATE welcome SET customer_num='$customer_num1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }
  if (!empty($_POST['customername'])) {
      $customer_name1 = mysqli_real_escape_string($db,$_POST['customername']);
      $query_update = "UPDATE welcome SET customer_name='$customer_name1' WHERE id='$id' ";
      $results_update = mysqli_query($db, $query_update);
  }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Welcome info</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>
        .sidebar{
            height: calc(163vh - 60px);
        }
        </style>
    </head>
    <body>
      <?php include 'navbar.php'; ?>
        <form id="form" action="edit welcome.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="position: absolute; top: 80px; left: 270px; width: 1000px;">
            <div class="form">
              <div class="form-title">Edit Welcome Information</div>
                <div class="input-div">
                  <label for="title">Title:</label>
                  <input id="title" type="text" name="title" value="<?php echo $title;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="description">Description:</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="text-box"><?php echo $description;?></textarea>
                </div>
                <div class="input-div">
                  <label for="agentnumber">Agent Number:</label>
                  <input id="agentnumber" type="text" name="agentnumber" value="<?php echo $agent_num;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="agentname">Agent Text:</label>
                  <input id="agentname" type="text" name="agentname" value="<?php echo $agent_name;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="empnum">Emploee Number:</label>
                  <input id="empnum" type="text" name="empnum" value="<?php echo $emp_num;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="empname">Emploee Name:</label>
                  <input id="empname" type="text" name="empname" value="<?php echo $emp_name;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="brunchnum">Brunch Number:</label>
                  <input id="brunchnum" type="text" name="brunchnum" value="<?php echo $brunch_num;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="brunchname">Brunch Text:</label>
                  <input id="brunchname" type="text" name="brunchname" value="<?php echo $brunch_name;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="customernum">Customer Number:</label>
                  <input id="customernum" type="text" name="customernum" value="<?php echo $customer_num;?>" class="input-box">
                </div>
                <div class="input-div">
                  <label for="customername">Customer Name:</label>
                  <input id="customername" type="text" name="customername" value="<?php echo $customer_name;?>" class="input-box">
                </div>
                <?php include 'errors.php'; ?>
                <input type="submit" value="Save Edits" name="welcomeedit" class="submit-btn">
            </div>
        </form>
    </body>
</html>