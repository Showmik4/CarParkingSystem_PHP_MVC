
<?php
require_once ('../../Controllers/ParkerController.php');

$info=getdetails();

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
            <h3><a href="parkerarea.php">Parkit</a></h3>
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
      <header>Parker's Dashboard</header>
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

            <div class="wrapper">
              <h2>Contact Admin</h2>
              <div id="error_message"></div>
              <form id="myform" onsubmit="return validate();" method="post" action="../../Controllers/ParkerController.php" >
                <div class="input_field">
            			<label for="Name">From:</label >
                    <input type="text" placeholder="Sender" value="<?php echo $_SESSION["loggedinuser"];?>" id="bal" readonly >
                </div>
                <div class="input_field">
            			<label for="subject">To:</label>
                    <input type="text" placeholder="Receiver" value="ADMIN" id="null"disabled><br><br>
                </div>
            		<div class="input_field">
            			<label for="subject">Subject:</label>
            				<input type="text" name="sub" placeholder="Subject" id="subject"><br><br>
            		</div>

                <div class="input_field">

                    <textarea placeholder="Message" name="msg" id="message"></textarea>
                </div>
                <div class="btn">
                    <input type="submit" name="insertreport" value="Send">
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

function validate(){

  var subject = document.getElementById("subject").value;
  var message = document.getElementById("message").value;

  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;

  if(subject.length < 10){
    text = "Please Write Correct Subject";
    error_message.innerHTML = text;
    return false;
  }

  if(message.length <= 40){
    text = "Please Write your problem in details";
    error_message.innerHTML = text;
    return false;
  }
  alert("Report Sent Successfully!");
  return true;
}
</script>
