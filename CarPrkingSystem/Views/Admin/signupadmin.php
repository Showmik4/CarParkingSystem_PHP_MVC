
<?php
//for database
  include ('../../Models/db.php');



  $name=$email=$phone=$space=$pass= $sql="";
  if(isset($_POST['ownersignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($conn, $_POST['ouname']);
    }




    if(!empty($_POST['ocpass'])){
      $pass = mysqli_real_escape_string($conn, $_POST['ocpass']);

    }

    $sql = "INSERT INTO admin (username,password)
              VALUES ('$name','$pass');";

      mysqli_query($conn, $sql);

    //  header("Location:../login.html");



  echo '<script>alert("Signup successfull")</script>';



  }

  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space Owner Sign-Up</title>
    <link rel="stylesheet" href="signupadmin.css" />
  </head>
  <body>
    <form class="box" action="" method="post">
      <h1>Sign-Up</h1>
      <input type="text" name="ouname" placeholder="Username" />

      <input type="password" name="ocpass" placeholder="Password" />
      <input type="submit" name="ownersignup" value="Sign-Up" />
    </form>
  </body>
</html>
