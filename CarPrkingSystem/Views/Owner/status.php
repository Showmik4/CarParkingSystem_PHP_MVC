
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
    <title>Current Status</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="status.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <style type="text/css">
  // variables
$font-stack-sans-serif: Roboto, Helvetica, Arial, sans-serif;
$font-stack-serif: "Roboto Slab", Times, "Times New Roman", serif;
$color: #333;
$inputstylecolor: mediumspringgreen;



// mixins
@mixin box-sizing {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



// resets
html, body {
  height: 100%;
  font-size: 20px;
}

html {
  @include box-sizing;
}

*, *:before, *:after {
  @include box-sizing;
}




/* main ie fix */

main {
  display: block;
}


/* headers */

h1, h2, h3, h4, h5, h6 {
  line-height: 1.25;
  font-family: $font-stack-serif;
}


/* anchor links */

a {
  text-decoration: none;
  &:hover,
  &:active {
    text-decoration: underline;
  }
  &:visited {
    color: purple;
  }
}


/* form elements */

label {
  display: inline-block;
  font-weight: 700;
}

select, textarea, input {
  width: 100%;
  padding: .5em;
  margin: 0;
  font-family: $font-stack-sans-serif;
  font-weight: 400;
  font-size: 1rem;
  color: $color;
}

input[type=submit] {
  cursor: pointer;
    color: white;
    margin-left: 23%;
    display: inline;
}


/* input border bottom animation on focus */




.input-animate-target {
  border: none;
  &:focus, &:valid {
    outline: none;
  }
  &:focus ~ .input-animate:before, &:valid ~ .input-animate:before {
    width: 100%;
  }
}


/* font awesome */

.fa {
  font-family: FontAwesome;
  font-style: normal;
}



// modules


/* flex */

.flex-cont {
  display: flex;
  align-items: center;
  height: 100%;
}


/* form */

.form-cont {
  max-width: 100%;
  padding: 2em;
  border-radius: 3px;
  margin: auto;
  background-color: #eee;
  box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .5);
}

.form-heading {
  margin-top: 0;
  color: #eae40e;
    margin-left: 30%;

}

.form-row {
  position: relative;
  margin-top: 1em;
}

.form-label {
  margin-bottom: 9.2em;
      color: red;
      font-size: larger;
      font-style: italic;
      margin-left: 17%;

}

.form-textbox:valid ~ .form-check-icon:after {
  content: "\f00c";
  position: absolute;
  right: .5em;
  bottom: .4em;
  font-family: FontAwesome;
  font-style: normal;
  color: $inputstylecolor;
}

.form-submit {
  display: block;
  width: 11%;
  padding: 1em;
  border: none;
  margin: 2em auto 0;
  background-color: $inputstylecolor;
  font-weight: 700;
  color: white;
  transition: opacity 200ms ease-in-out;
  background: mediumseagreen;
  border-radius: 24px;
}
  &:hover, &:focus {
    opacity: .6;

  }




// media queries

@media only screen and (max-width:768px){
  html, body {
    font-size: 18px;
  }
}
@media only screen and (max-width:640px){
  html, body {
    font-size: 16px;
  }
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
            <h1>Welcome to Garage</h1>
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
          <a href="ownerprofile.html"><i class="fas fa-link"></i>Profile</a>
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
            <form method="post" action="../../Controllers/OwnerController.php"  enctype="multipart/form-data" class="form">
      				<h1 class="form-heading">Your Current Status is -- <?php echo $info["status"]?></h1>
      				<div class="form-content">
      					<div class="form-row">
      						<label for="first-name" class="form-label">If you press stop service button then your service for this app will no longer available<br><center>
                                   You can start your service by pressing start button</center><br>
                                                                <center>Thank you!!</center>
</label>



      					</div>


      					<div>
      						<input type="submit" name="on" value="Start Service" class="form-submit">
                  <input type="submit" name="off" value="Stop Service" class="form-submit">
      					</div>
      				</div>
      			</form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
