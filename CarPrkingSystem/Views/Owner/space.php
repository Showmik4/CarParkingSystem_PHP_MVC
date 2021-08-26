
<?php
session_start();
require_once ('../../Controllers/OwnerController.php');

$info=getdetails();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space</title>
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
    top: 54%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 350px;
    width: 100%;
    background: #fff;
    padding: 25px;
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
            <h3><a href="ownerarea.php">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome to Space</h1>
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
          <a href="garage.html"><i class="fas fa-stream"></i>Garages</a>
        </li>
        <li>
          <a href="reportowner.html"
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
              <h2>Space Maintainance</h2>
              <div id="error_message"></div>
              <form id="myform" method="post" action="../../Controllers/OwnerController.php" >
                <div class="input_field">
            			<label for="Name">your current space :</label >
                    <input type="text" placeholder="Sender" value="<?php echo $info["space"];?>" id="bal" readonly >
                </div>

            		<div class="input_field">
            			<label for="subject">Select new space:</label>

                    <select name="sub" id="subject"><br><br>
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
  </select>
            		</div>


                <div class="btn">
                    <input type="submit" name="cspace" value="Change">
                </div>
              </form>
            </div>




          </div>
        </div>
      </div>
    </section>
  </body>
</html>
