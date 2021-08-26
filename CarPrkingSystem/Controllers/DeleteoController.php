<?php

  require_once '../Models/db_connect.php';

$query ="Delete from owner where sl='$_GET[id]'";
  execute($query);
	header("Location:../Views/Admin/allowner.php");
  ?>
