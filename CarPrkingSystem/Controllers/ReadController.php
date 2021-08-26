<?php

  require_once '../Models/db_connect.php';

  $query2="UPDATE `reportbox` SET `status`='Read' WHERE `sl`='$_GET[id]'";


  execute($query2);
	header("Location:../Views/Admin/recentreport.php");
  ?>
