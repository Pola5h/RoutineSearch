<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //select
   $sql =  " delete from tb_faculty where f_id='$_GET[f_id]'";
   //execute
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=fview.php");
   else
	   echo "Not deleted";
   ?>
