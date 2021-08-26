<?php
require_once ('../../Controllers/AdminController.php');

$info=allparker();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parker</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="allparker.css" />
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
    background: black;
}
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
            <h3><a href="adminarea.php">Parkit</a></h3>
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
          <a href="adminarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="profile.php"><i class="fas fa-link"></i>Profile</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-stream"></i>Finance</a>
        </li>
        <li>
          <a href="report.php"
            ><i class="fas fa-calendar-week"></i>Reports</a
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
                  <th>UserName</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Email</th>

            <th>NID</th>
            <th>Password</th>

            <th>------------------</th>

              </thead>


              <tbody>
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["sl"]."</td>";
                        echo "<td>".$infos["username"]."</td>";
                      echo "<td>".$infos["Name"]."</td>";
              echo "<td>".$infos["phone"]."</td>";
                echo "<td>".$infos["Address"]."</td>";
                echo "<td>".$infos["email"]."</td>";
                        echo "<td>".$infos["nid"]."</td>";
                      echo "<td>".$infos["password"]."</td>";

            echo '<td><button class="btn"><a href="../../Controllers/DeletepController.php?id='.$infos["sl"].'" i class="fa fa-trash">  delete</a></td>';
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
