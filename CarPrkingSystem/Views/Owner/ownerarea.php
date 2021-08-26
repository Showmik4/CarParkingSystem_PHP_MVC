<?php
session_start();

setcookie("cook",time()+3600);//1 hour cookie
require_once ('../../Controllers/OwnerController.php');
if (!isLoggedIn()) {

  header('location: ../login.php');
}
$info=getdetails();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Space Owner's Dashbord</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ownerarea.css" />
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
            <h3><a href="ownerarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome Space Owner ~ <?php echo $_SESSION["loggedinuser"];?> </h1>
            <div class="rightmenu">
              <button id="buttonone" < onclick="window.location.href='logout.php';">
                Logout
              </button>
          </div>
          </div>
    </header>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Owner's Area</header>
      <ul>
        <li>
          <a href="ownerarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="profile.php"><i class="fas fa-link"></i>Profile</a>
        </li>
        <li>
          <a href="ownerhistory.php"><i class="fas fa-stream"></i>History</a>
        </li>
        <li>
          <a href="report.php"><i class="fas fa-calendar-week"></i>Report</a>
        </li>
      </ul>
    </div>
    <section>
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            <small>Current Status</small>
            <p><?php echo $info["status"]?></p>
          </div>
          <div class="detail-section">
            <a href="status.php">More Info </a>
          </div>
        </div>
        <div class="dashbord dashbord-red">
          <div class="icon-section">
            <i class="fa fa-tasks" aria-hidden="true"></i><br>
            <small>Operate Space</small>
            <p><?php echo $info["space"]?></p>
          </div>
          <div class="detail-section">
            <a href="space.php">More Info </a>
          </div>
        </div>
        </div>
    </section>
  </body>
</html>
