<?php
require_once ('../../Controllers/ParkerController.php');

$info=activeparking();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Release</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="release.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>


  <style>
  table {
    border-collapse: collapse;
  margin-left: 272px;
  color: white;
  border: transparent;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }

  table tr:not(:first-child){
                 cursor: pointer;transition: all .25s ease-in-out;
             }
             table tr:not(:first-child):hover{background-color: #ddd;}

             .btn {
     background-color: red;
     border: none;
     color: white;
     padding: 12px 16px;
     font-size: 16px;
     cursor: pointer;
  	 border-radius: 10px;
   }


   .btn:hover {
     background-color: RoyalBlue;
   }

   a:link{


     color: white;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }

  </style>


  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a href="parkerarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Release Parking</h1>
            <div class="rightmenu">
              <button
                id="buttonone"
                <
                onclick="window.location.href='../home.html';"
              >
                Logout
              </button>
            </div>
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
      <header>Owner's Area</header>
      <ul>
        <li>
          <a href="parkerarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="profile.php"><i class="fas fa-link"></i>Profile</a>
        </li>
        <li>
          <a href="parkerhistory.php"><i class="fas fa-stream"></i>Finance</a>
        </li>
        <li>
          <a href="report.php"
            ><i class="fas fa-calendar-week"></i>Report</a
          >
        </li>
      </ul>
    </div>
    <section>
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">





            <table id="table" border="1">
              <thead>
                <th>Sl.</th>
                  <th>Your UserName</th>
                <th>Owner UserName</th>
                <th>Owner Address</th>
            <th>Owner Number</th>
            <th>Total Hour</th>
            <th>Total Cost</th>
            <th>Parking Date&Time</th>
            <th>------------------</th>
              </thead>


              <tbody>
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["sl"]."</td>";
                        echo "<td>".$infos["parkerId"]."</td>";
                      echo "<td>".$infos["oid"]."</td>";
              echo "<td>".$infos["oaddress"]."</td>";
                echo "<td>".$infos["ono"]."</td>";
                        echo "<td>".$infos["hour"]."</td>";
                      echo "<td>".$infos["cost"]."</td>";
                      echo "<td>".$infos["Date&Time"]."</td>";
            echo '<td><button class="btn"><a href="../../Controllers/ReleaseControler.php?id='.$infos["sl"].'&amp;oid='.$infos["oid"].'" i class="fa fa-trash">  Release</a></td>';
                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<script>

var time= new Date();
document.getElementById('bal').innerHTML=time;

</script>
