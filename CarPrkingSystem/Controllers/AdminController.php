<?php

  require_once '../Models/db_connect.php';

  if(isset($_POST["Updateparker"]))
  {

  }


  else if(isset($_POST["insertreport"]))
  {

  }


function finance()
{


  $query="SELECT * FROM booking where status='Released' order by `sl` DESC ";
  $product=get($query);
  return $product;


}


function getrequests()
{


  $query="SELECT * FROM prequest";
  $product=get($query);
  return $product;


}

function allparker()
{


  $query="SELECT * FROM parker";
  $product=get($query);
  return $product;


}

function allowner()
{


  $query="SELECT * FROM owner";
  $product=get($query);
  return $product;


}

function allreport()
{


  $query="SELECT * FROM reportbox order by `sl` DESC";
  $product=get($query);
  return $product;


}

function unreadreport()
{


  $query="SELECT * FROM reportbox where status='Unread' order by `sl` DESC";
  $product=get($query);
  return $product;


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
