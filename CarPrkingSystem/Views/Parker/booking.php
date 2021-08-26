
<?php
require_once ('../../Controllers/ParkerController.php');

$info=getselectedowner();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="report.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>


  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Josefin Sans', sans-serif;
  	    font-weight: bold;
  }

  body{

  }

  .wrapper{
    position: absolute;
top: 58%;
left: 52%;
transform: translate(-50%,-50%);
max-width: 380px;
width: 100%;
background: #fff;
padding: -25px;
border-radius: 5px;
box-shadow: 4px 4px 2px rgba(254,236,164,1);
  }

  .wrapper h2{
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #332902;
  }

  .wrapper .input_field{
    margin-bottom: 10px;
  }

  .wrapper .input_field input[type="text"],
  .wrapper textarea{
    border: 1px solid #e0e0e0;
    width: 100%;
    padding: 10px;
  }

  .wrapper textarea{
    resize: none;
    height: 80px;
  }

  .wrapper .btn input[type="submit"]{
    border: 0px;
    margin-top: 15px;
    padding: 10px;
    text-align: center;
    width: 100%;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;
  }

  #error_message{
    margin-bottom: 20px;
    background: #fe8b8e;
    padding: 0px;
    text-align: center;
    font-size: 14px;
    transition: all 0.5s ease;
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
            <h1>Welcome to Booking</h1>
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
          <a href="garage.html"><i class="fas fa-stream"></i>Garages</a>
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

            <div class="wrapper">
              <h2>Booking Space</h2>
              <div id="error_message"></div>
              <form id="myform"  method="post" action="../../Controllers/ParkerController.php" >
                <div class="input_field">
            			<label for="Name">Owner Id :</label >
                    <input type="text" name="ownerid" placeholder="" value="<?php echo $info["username"];?>" id="bal" readonly >
                </div>
                <div class="input_field">
            			<label for="Name">Owner Name :</label >
                    <input type="text" placeholder="" name="ownername" value="<?php echo $info["Name"];?>" id="bal" readonly >
                </div>

                <div class="input_field">
            			<label for="Name">Owner Address :</label >
                    <input type="text" placeholder="" name="owneraddress" value="<?php echo $info["Address"];?>" id="bal" readonly >
                </div>

                <div class="input_field">
            			<label for="Name">Owner Phone No :</label >
                    <input type="text" placeholder="" name="ownerno" value="<?php echo $info["phone"];?>" id="bal" readonly >
                </div>

                <div class="input_field">
            			<label for="Name">Owner space :</label >
                    <input type="text" placeholder="" name="ownerspace" value="<?php echo $info["space"];?>" id="bal" readonly >
                </div>

                <div class="input_field">
            			<label for="subject">Select Hour :</label>

                    <select name="hour" onchange="calculateAmount(this.value)"id="subject"name="hour"><br><br>


    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="48">48</option>

  </select>


            		</div>
            		<div class="input_field">
            			<label for="subject">Estemated Cost(TK) :</label>
            			<input type="text" placeholder="" value="30" name="cost"id="tot_amount" readonly >
            		</div>


                <div class="btn">
                    <input type="submit" name="booking" value="Book">
                </div>
              </form>
            </div>




          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<script>
            function calculateAmount(val) {
				
                var tot_price = val * 30;

                var divobj = document.getElementById('tot_amount');
				//var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }
        </script>
