
<?php




session_start();
	require_once ('../Controllers/OwnerController.php');
$info=getmalik();



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space Owner</title>
    <link
    href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="spaceowner.css" />
  
  
  </head>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
    width: 200px;
    height: 200px;
    display: inline-block;
    perspective: 1000px;
    padding: 10px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

p{
	
	padding-top: 30px;
}
</style>
  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a href="home.html">Parkit</a></h3>
          </div>
          <div class="rightmenu">
            <ul>
              <li><a  href="home.html">HOME</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a id="fisrtlist" href="spaceowner.php">Space Owner</a></li>
              <li><a href="parker.php">Parker</a></li>
              <li><a href="aboutus.html">About Us</a></li>
              <li><a href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
       
	   </div>
	   
	    <?php
      foreach($info as $info)
      {
		  
		  ?>
		<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../Storage/Images/SpaceOwner.png">
       <h3 style=color:white;>User name: <?php echo $info["username"]?></h3>
    </div>
   
    <div class="flip-card-back">
      <h1><?php echo $info["Name"]?></h1> 
     <center><p><?php echo $info["Address"]?></p> 
      <p>Status-<?php echo $info["status"]?></p>
    </div>
  </div>
</div>
<?php
	  }
	  
	  ?>
	  
	  
	  
    </header>
	

  </body>
</html>