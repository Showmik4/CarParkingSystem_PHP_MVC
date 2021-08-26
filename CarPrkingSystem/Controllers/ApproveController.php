<?php

  require_once '../Models/db_connect.php';


$query = "INSERT INTO parker (sl,username,Name,phone,nid,password,Address,status)
          VALUES ('$_GET[id]','$_GET[uname]','$_GET[name]','$_GET[phone]','$_GET[nid]','$_GET[pass]','$_GET[Add]','$_GET[status]');";
        $query2 ="Delete from prequest where sl='$_GET[id]'";
		
  execute($query);
  execute($query2);
	header("Location:../Views/Admin/prequest.php");
  ?>
