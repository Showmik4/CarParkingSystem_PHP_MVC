<?php

date_default_timezone_set("Asia/Dhaka");
$time=date("M,d,Y h:i:s A");

 require_once '../Models/db_connect.php';
  require_once '../Models/row.php';





  $query="UPDATE booking SET Status='Released', ReleaseTime='$time' WHERE sl='$_GET[id]'";


  execute($query);


  $query2="SELECT * FROM `owner` WHERE `username`='$_GET[oid]'";
   $result=mysqli_query($con,$query2);
	   $row=mysqli_num_rows($result);
	   if($row>0){
		   while($row = mysqli_fetch_assoc($result)){
				$space=$row['space'];

				$addone=$space + 1;
		  // echo "$addone";
		   $query3="UPDATE owner SET space='$addone',Val='ok' WHERE username='$_GET[oid]'";

		  execute($query3);

		   }

	   }






	header("Location:../Views/Parker/release.php");
  ?>
