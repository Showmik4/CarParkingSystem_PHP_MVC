<?php
	require_once '../models/db_connect.php';
	session_start();
	$name="";
	$username="";
	$err_name="";
	$err_username="";
	$password="";
	$err_password="";

	$hasError=false;

	if(isset($_POST["login"])){
		ownerlogin();
		parkerlogin();
		adminlogin();
	}
	function ownerlogin()

	{
		if(empty($_POST["username"])){
			$err_username= "Username required";
			$hasError = true;
		}else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$hasError=true;
		}else{
			$password=$_POST["password"];
		}
		if(!$hasError){
			$password = $password;
			if(authenticate($username,$password)){


				header("Location:../Views/Owner/ownerarea.php");
			}
		}
}

function authenticate($username,$password){
	$query = "SELECT username from owner where username='$username' and password='$password'";
	$result = getAssocArray($query);

	if($result){
		$result = $result[0];

	}
	return $result;


}


function parkerlogin()

{
	if(empty($_POST["username"])){
		$err_username= "Username required";
		$hasError = true;
	}else{
		$username=$_POST["username"];
	}
	if(empty($_POST["password"])){
		$err_password="Password Required";
		$hasError=true;
	}else{
		$password=$_POST["password"];
	}
	if(!$hasError){
		$password = $password;
		if(authenticate2($username,$password)){
			  $_SESSION["loggedinuser"]=$row["username"];


			header("Location:../Views/parker/parkerarea.html");
		}
	}
}

function authenticate2($username,$password){
$query = "SELECT username from parker where username='$username' and password='$password'";
$result = getAssocArray($query);
if($result){
	$result = $result[0];
}
return $result;


}



function adminlogin()

{
	if(empty($_POST["username"])){
		$err_username= "Username required";
		$hasError = true;
	}else{
		$username=$_POST["username"];
	}
	if(empty($_POST["password"])){
		$err_password="Password Required";
		$hasError=true;
	}else{
		$password=$_POST["password"];
	}
	if(!$hasError){
		$password = $password;
		if(authenticate3($username,$password)){
			header("Location:../Views/admin/adminarea.html");
		}
		else {
			echo '<script>alert("Please check your username and Password")</script>';
			}
		}
	}


function authenticate3($username,$password){
$query = "SELECT username from admin where username='$username' and password='$password'";
$result = getAssocArray($query);
if($result){
	$result = $result[0];
}
return $result;


}



?>
