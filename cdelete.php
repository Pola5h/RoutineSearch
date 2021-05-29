<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //select
   $sql =  " delete from course where c_id='$_GET[c_id]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=cview.php");
   else
	   echo "Not deleted";
   ?>
