

<?php

require_once ('../../Controllers/AdminController.php');
	$info = finance();




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkit";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT sum(cost) AS total FROM booking"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  $income=$Ao * .10;
 
}








?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Finance</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="finance.css" />
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
#huh{
	Color:red;
	 display: inline;
	
}
h2{
	Color: white;
    font-style: italic;
    font-family: cursive;
    margin-left: 602px;
    display: inline;
    text-align: center;

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
            <h1>Welcome to Finance</h1>
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
      <header>Admin's Dashbord</header>
      <ul>
        <li>
          <a href="adminarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="signupadmin.php"><i class="fas fa-link"></i>Admin Sign Up</a>
        </li>
        <li>
          <a href="finance.php"><i class="fas fa-stream"></i>Finance</a>
        </li>
        <li>
          <a href="allreport.php"
            ><i class="fas fa-calendar-week"></i>Reports</a
          >
        </li>
      </ul>
    </div>
    <section>
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">
          <form  method="post" action="" enctype="multipart/form-data">

<h2>OUR TOTAL INCOME--- </h2>

     <h1 id="huh"> <?php echo $income ; ?> TK</h1>
          

<center><table id="myTable">

  <tr class="header">

    <th style="color:black">Parker Id</th>
    <th style="color:black">Owner Id</th>
<th style="color:black">Owner Name</th>
    <th style="color:black">Owner Address</th>
<th style="color:black">Owner No</th>
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
        echo "<td>".$info["oid"]."</td>";
  echo "<td>".$info["oname"]."</td>";

echo "<td>".$info["oaddress"]."</td>";

            echo "<td>".$info["ono"]."</td>";
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
<script>

              


               
