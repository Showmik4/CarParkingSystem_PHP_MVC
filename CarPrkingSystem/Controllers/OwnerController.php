<?php
$var;
  require_once '../Models/db_connect.php';

  if(isset($_POST["Updateowner"]))
  {
    Profileupdate();
  }

  else if(isset($_POST["on"]))
  {
    Statuson();
  }

  else if(isset($_POST["off"]))
  {
    Statusoff();
  }
  else if(isset($_POST["insertreport"]))
  {
    insertreportadmin();
  }

  else if(isset($_POST["cspace"]))
  {
    Spacechange();
  }

  else if(isset($_POST["signup"]))
  {
    
  }






  function getdetails()
  {


    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM owner WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }

  function history()
  {
session_start();
if(!empty('$_SESSION["loggedinuser"]')){
  $var=$_SESSION["loggedinuser"];
}
    $query="SELECT * FROM booking where status='Released' and oid='$var' order by `sl` DESC";
    $user=get($query);
    return $user;


  }

function getmalik()
  {




    $query="SELECT * FROM owner ";
    $user=get($query);
    return $user;


  }





  function Profileupdate()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];
$oldpassword=$_POST["cpass"];
            $npassword=$_POST["npass"];
            $email=$_POST["email"];

			If($npassword==="")
			{echo '<script language="javascript">';
    echo 'alert("Enter your old pass or You can update your password")';
    echo '</script>';}
		else
			{
    $query="UPDATE owner SET Name='$name',phone='$phone',email='$email',Address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../Views/Owner/ownerarea.php");
			}
}

function Statuson()
{
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"]; }
  $query="UPDATE owner SET status='Active'WHERE username='$var'";
    execute($query);

  header("Location:../Views/Owner/status.php");
}

function Statusoff()
{
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"]; }
  $query="UPDATE owner SET status='Inactive' WHERE username='$var'";
    execute($query);

  header("Location:../Views/Owner/status.php");
}


function insertreportadmin()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $aname=$_POST["sub"];
  $aemail=$_POST["msg"];


  $query="INSERT INTO reportbox(sender,receiver,subject,message,usertype,status) VALUES ('$var','Admin','$aname','$aemail','Space Owner','Unread')";


  execute($query);
header("Location:../Views/Owner/report.php");

}


function Spacechange()
{
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"]; }
$value=$_POST["sub"];

  $query="UPDATE owner SET space='$value' WHERE username='$var'";
  //echo $query;
    execute($query);

  header("Location:../Views/Owner/space.php");
}


function isLoggedIn()
{
  if (isset($_SESSION['loggedinuser'])) {
    return true;
  }else{
    return false;
  }
}







?>
