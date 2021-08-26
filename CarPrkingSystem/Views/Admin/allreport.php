

<?php

require_once ('../../Controllers/AdminController.php');
	$info = allreport();



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="allreport.css" />
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
            <h3><a href="adminarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome to Report</h1>
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


          <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></center>

<center><table id="myTable">
  <tr class="header">

    <th style="color:black">Sender</th>
    <th style="color:black">Subject</th>
<th style="color:black">User Type</th>
    <th style="color:black">Message</th>
<th style="color:black">Date</th>



  </tr>
  <tbody>
    <?php
      foreach($info as $info)
      {
        echo "<tr>";

        echo "<td>".$info["sender"]."</td>";
        echo "<td>".$info["subject"]."</td>";
  echo "<td>".$info["usertype"]."</td>";

echo "<td>".$info["message"]."</td>";

            echo "<td>".$info["date"]."</td>";


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

               var table = document.getElementById('myTable');

               for(var i = 1; i < table.rows.length; i++)
               {
                   table.rows[i].onclick = function()
                   {

                        document.getElementById("fname").value = this.cells[1].innerHTML;
												document.getElementById("no").value = this.cells[0].innerHTML;

                   };
               }


               function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

        </script>
