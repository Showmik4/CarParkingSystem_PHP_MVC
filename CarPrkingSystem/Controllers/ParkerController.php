<?php
$var;
  require_once '../Models/db_connect.php';

  if(isset($_POST["Updateparker"]))
  {
    Profileupdate();
  }


  else if(isset($_POST["insertreport"]))
  {
    insertreportadmin();
  }


  else if(isset($_POST["passingid"]))
  {
    transferid();
  }


  else if(isset($_POST["booking"]))
  {
    booking();
  }







  function getdetails()
  {
    session_start();

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM parker WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }

  function getdriver()
  {




    $query="SELECT * FROM parker ";
    $user=get($query);
    return $user;


  }

  function getowner()
  {


    $query="SELECT * FROM owner where status='Active' and Val='ok'";
    $product=get($query);
    return $product;


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

            $npassword=$_POST["npass"];
            $email=$_POST["email"];
    $query="UPDATE parker SET Name='$name',phone='$phone',email='$email',Address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../Views/Parker/parkerarea.php");
}




function insertreportadmin()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $aname=$_POST["sub"];
  $aemail=$_POST["msg"];


  $query="INSERT INTO reportbox(sender,receiver,subject,message,usertype,status) VALUES ('$var','Admin','$aname','$aemail','Parker','Unread')";


  execute($query);
header("Location:../Views/Parker/report.php");

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



function transferid()
{ session_start();
if(isset($_POST["fnamee"])){

$fname=$_POST["fnamee"];

  $_SESSION["id"]=$fname;

header("Location:../Views/Parker/booking.php");
}
}



function getselectedowner()
{
  session_start();

  if(!empty('$_SESSION["id"]')){
    $var=$_SESSION["id"];

  }

  $query="SELECT * FROM owner WHERE username='$var'";
  $product=get($query);
  return $product[0];


}


function booking()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $oid=$_POST["ownerid"];
  $oname=$_POST["ownername"];
  $oaddress=$_POST["owneraddress"];
  $ono=$_POST["ownerno"];
  $ospace=$_POST["ownerspace"];
  $bhour=$_POST["hour"];
  $bcost=$_POST["cost"];

  $updatespace=($_POST["ownerspace"]-1);
  if($ospace==1){


$query3="UPDATE `owner` SET `Val`='no' WHERE `username`='$oid'";

$query="INSERT INTO booking(`parkerId`, `oid`, `oname`, `oaddress`, `ono`, `ospace`, `hour`, `cost`,status) VALUES ('$var','$oid','$oname','$oaddress','$ono','$updatespace','$bhour','$bcost','Active')";

$query2="UPDATE `owner` SET `space`='$updatespace' WHERE `username`='$oid'";

execute($query3);
execute($query);
execute($query2);
header("Location:../Views/Parker/parkerarea.php");

  }

  else{

  $query="INSERT INTO booking(`parkerId`, `oid`, `oname`, `oaddress`, `ono`, `ospace`, `hour`, `cost`,status) VALUES ('$var','$oid','$oname','$oaddress','$ono','$updatespace','$bhour','$bcost','Active')";

$query2="UPDATE `owner` SET `space`='$updatespace' WHERE `username`='$oid'";


  execute($query);
  execute($query2);
header("Location:../Views/Parker/parkerarea.php");

}
}

function activeparking()
{
  session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $query="SELECT * FROM booking WHERE parkerId='$var' AND status='Active'";
  $product=get($query);
  //echo "$query";
  return $product;


}
function history()
{
  session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $query="SELECT * FROM booking WHERE parkerId='$var' AND status='Released' order by `sl` DESC";
  $info=get($query);
  //echo "$query";
  return $info;


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
