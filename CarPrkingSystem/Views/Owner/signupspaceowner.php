
<?php
//for database
  include ('../../Models/db.php');



  $name=$email=$phone=$space=$pass= $sql=$error="";
  $flag=0;
  if(isset($_POST['ownersignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($conn, $_POST['ouname']);
    }
else{

  $error="user name can not be empty";
  $flag=1;

}


    if(!empty($_POST['oemail'])){
      $email = mysqli_real_escape_string($conn, $_POST['oemail']);

    }
    else{

      $error="email can not be empty";
      $flag=1;

    }
     if(!empty($_POST['ophone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['ophone']);

    }
    else{

      $error="phone can not be empty";
      $flag=1;

    }
    if(!empty($_POST['ospace'])){
      $space = mysqli_real_escape_string($conn, $_POST['ospace']);

    }
    else{

      $error="space can not be empty";
      $flag=1;

    }

    if(!empty($_POST['oaddress'])){
      $address = mysqli_real_escape_string($conn, $_POST['oaddress']);

    }
    else{

      $error="address can not be empty";
      $flag=1;

    }

    if(!empty($_POST['ocpass'])){
      $pass = mysqli_real_escape_string($conn, $_POST['ocpass']);

    }
    else{

      $error="password can not be empty";
      $flag=1;

    }
if(!empty($_POST['ocpass'])&&!empty($_POST['oaddress'])&&!empty($_POST['ospace'])&&!empty($_POST['ophone'])&&!empty($_POST['oemail'])&&!empty($_POST['ouname'])){

  $sql = "INSERT INTO owner (username,email,phone,space,password,Address,status,Val)
            VALUES ('$name','$email','$phone','$space','$pass','$address','Active','ok');";

    mysqli_query($conn, $sql);
      echo '<script>alert("Your account has been created")</script>';
}

else{

}
  }
  ?>
<style>

#error_message{
    margin-bottom: 20px;
    background: #fe8b8e;
    padding: 0px;
    text-align: center;
    font-size: 14px;
    transition: all 0.5s ease;
  }

</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space Owner Sign-Up</title>
    <link rel="stylesheet" href="signupspaceowner.css" />
  </head>
  <body>
    <form class="box" onsubmit="return validate();" action="" method="post" >
    <div id="Error_Message"><?php echo $error ?>
    </div>
      <h1>Space Owner Sign-Up</h1>
      <input type="text" name="ouname" id="uname" placeholder="Username" />
      <input type="text" name="oemail" id="email" placeholder="Email Address" />
      <input type="text" name="ophone" id="phone" placeholder="Phone Number" />
      <input type="text" name="ospace" id="space" placeholder="Space Details" />
      <input type="text" name="oaddress" id="address" placeholder="your Address" />
      <input type="password" name="ocpass" id="pass" placeholder="Password" />
      <input type="submit" name="ownersignup" value="Sign-Up" />
    </form>
  </body>
</html>

<script>
function Validate(){
var uname = document.getElementById("uname").value;
var email = document.getElementById("email").value;
var phone = document.getElementById("phone").value;
var space = document.getElementById("space").value;
var address = document.getElementById("address").value;
var pass = document.getElementById("pass").value;
var error = document.getElementById("Error_Message").value;

error.style.padding="10px";
var message;



if(uname.length<1){
message="Please write your Username";
error.innerHTML=message;
return false;



}


}












</script>
