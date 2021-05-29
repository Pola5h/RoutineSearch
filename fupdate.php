<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //update
   $sql =  " update tb_faculty set f_name = '$_POST[f_name]',f_dep = '$_POST[f_dep]',contact = '$_POST[contact]' where f_id = '$_POST[f_id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=fview.php");
   else
	   echo "Not update";
   ?>
