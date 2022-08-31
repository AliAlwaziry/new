<?php
$db=mysqli_connect('localhost','root','','Temmam_Pharma');

if(!$db){
    die("Connection failed: ". mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="navbar.css">
  </head>
  <body>
    <!-- ////////////////////////////////////////////////navbar///////////////////////////////////////////// -->
    <nav class="navbar">
      <div class="upper-navbar">
        <div class="navbar-logo">
          <img class="logo" src="img/logo.svg" alt="">
        </div>

        <?php if(isset($_SESSION['user'])){ ?>
        <div class="user-options">
          <img class="user-logo" src="img/person_FILL0_wght400_GRAD0_opsz48.png" alt="">
          <div class="user-name">
            <?php
    if (isset($_SESSION['user'])) {
        $session = $_SESSION['user'];
        $query = "SELECT * FROM login_information WHERE email='$session' OR UserName='$session' ";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $row = mysqli_fetch_assoc($results);
            $name = $row['Name'];
            echo $name;
        }
    } else {
        $name = "";
        echo $name;
    }
    ?>
          </div>
          <div class="dropdown">
            <img class="expand-more" src="img/expand_more logo.png" alt="">
            <div class="dropdown-content">
              <a href="logout.php">Logout</a>
              <a href="#">Link 2</a>
            </div>
          </div>
          
          <div class="search-div">
            <input class="search-box" type="text" name="search" placeholder="search">
            <button type="button" class="search-logo-div">
              <img class="search-logo" src="img/search logo.png" alt="">
            </button>
          </div>
          <?php }?>
        </div>
      </div>
    </nav>
    <!-- ////////////////////////////////////////////////sidebar///////////////////////////////////////////// -->
    <nav class="sidebar">
      <div class="sidebar-title">
        Adamin Dashboard
      </div>
      <div class="sidebar-buttons">
        <h3>content</h3>
        <div class="dropdown">
          <div class="pages">
            <img src="img/pages icon.png" alt="">
            Edit Page Contents
            <img class="expand-more" src="img/expand_more logo.png" alt="">
            <div class="sidebar-dropdown-content">
              <a href="edit header.php">Edit Header Information</a>
              <a href="edit welcome.php">Edit Temmam Pharma Information</a>
              <a href="edit aboutus.php">Edit About us Information</a>
              <a href="edit aboutcom.php">Edit About Company Information</a>
              <a href="edit strategy.php">Edit Our Strategy Information</a>
              <a href="edit partners.php">Edit Our Partners Information</a>
              <a href="edit timeline.php">Edit TimeLine Information</a>
              <a href="edit contactus.php">Edit Contact us Information</a>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <div class="pages">
            <img src="img/pages icon.png" alt="">
            Admins Settings
            <img class="expand-more" src="img/expand_more logo.png" alt="">
            <div class="sidebar-dropdown-content">
              <a href="add admin.php">Add New Admin</a>
              <a href="update admin.php">Update Admin Information</a>
              <a href="remove admin.php">Remove Admin</a>
              <a href="display admins.php">Display Admins List</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>
