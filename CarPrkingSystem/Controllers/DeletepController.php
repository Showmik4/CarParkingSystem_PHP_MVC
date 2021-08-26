<?php

  require_once '../Models/db_connect.php';

$query ="Delete from parker where sl='$_GET[id]'";
  execute($query);
	header("Location:../Views/Admin/allparker.php");
  ?>
