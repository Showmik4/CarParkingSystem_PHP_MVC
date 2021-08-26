
<?php
session_start();
require_once ('../../Controllers/AdminController.php');
if (!isLoggedIn()) {

  header('location: ../login.php');
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM owner WHERE status='Active'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM parker WHERE status='Active'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ta=$values["total"];
  if($Ta==0)
  {$Ta='no';}
  else {
    $Ta=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM prequest WHERE status='Active'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Pr=$values["total"];
  if($Pr==0)
  {$Pr='no';}
  else {
    $Pr=$values["total"];
  }

}

if($query="SELECT count(sl) AS total FROM reportbox WHERE status='Unread'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Us=$values["total"];
  if($Us==0)
  {$Us='no';}
  else {
    $Us=$values["total"];
  }

}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Admin's Dashbord</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="adminarea.css" />
    <link
    href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
    rel="stylesheet"
  />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a herf="adminarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Admin Dashbord</h1>
            <div class="rightmenu">
              <button id="buttonone" < onclick="window.location.href='logout.php';">
                Logout
              </button>
            </div>
          </div>
        </div>
    </header>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Admin's Dashbord</header>
      <ul>
        <li>
          <a href="adminarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="signupadmin.php"><i class="fas fa-link"></i>Admin Signup</a>
        </li>
        <li>
          <a href="finance.php"><i class="fas fa-stream"></i>Finance</a>
        </li>
        <li>
          <a href="allreport.php"><i class="fas fa-calendar-week"></i>Reports</a>
        </li>
      </ul>
    </div>
      <section>
        <div class="main-section">
          <div class="dashbord dashbord-red">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Active Owner</small>
              <p>You Have <?php echo $Ao ; ?> Active Owners</p>
            </div>
            <div class="detail-section">
              <a href="allowner.php">View All </a>
            </div>
          </div>
          <div class="dashbord dashbord-green">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Active Parker</small>
              <p>You have <?php echo $Ta ; ?> Active Parker</p>
            </div>
            <div class="detail-section">
              <a href="allparker.php">View All </a>
            </div>
          </div>
          <div class="dashbord dashbord-orange">
            <div class="icon-section">
              <i class="fa fa-bell" aria-hidden="true"></i><br>
              <small>Parker Request</small>
              <p>You Have <?php echo $Pr ; ?> Requests</p>
            </div>
            <div class="detail-section">
              <a href="prequest.php">View All </a>
            </div>
          </div>
          <div class="dashbord dashbord-blue">
            <div class="icon-section">
              <i class="fa fa-comments" aria-hidden="true"></i><br>
              <small>Reports</small>
              <p>You Have <?php echo $Us ; ?> unread Reports</p>
            </div>
            <div class="detail-section">
              <a href="recentreport.php">View All </a>
            </div>
          </div>
          </div>
      </section>
  </body>
</html>
