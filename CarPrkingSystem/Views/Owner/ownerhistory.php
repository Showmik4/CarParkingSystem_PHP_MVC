

<?php

require_once ('../../Controllers/OwnerController.php');
	$info = history();



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owner History</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="ownerhistory.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>


  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}

#myTable {
  border-collapse: collapse;
    width: 50%;
    border: 1px solid #ddd;
    font-size: 18px;

    color: white;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: mediumseagreen;
}

.container {
  border-radius: 5px;

  padding: 84px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 47%;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>



  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a href="ownerarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome to Owner History</h1>
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
          <form  method="post" action="" enctype="multipart/form-data">


          

<center><table id="myTable">
  <tr class="header">

    <th style="color:black">Parker Id</th>
    
<th style="color:black">Hour</th>
<th style="color:black">Cost</th>
<th style="color:black">Booking Time</th>
<th style="color:black">Release Time</th>



  </tr>
  <tbody>
    <?php
      foreach($info as $info)
      {
        echo "<tr>";

         echo "<td>".$info["parkerId"]."</td>";
       
			echo "<td>".$info["hour"]."</td>";
			echo "<td>".$info["cost"]."</td>";
			echo "<td>".$info["Date&Time"]."</td>";
			echo "<td>".$info["ReleaseTime"]."</td>";


        echo "</tr>";
      }
    ?>

  </tbody>

</table></center>



            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>


               
