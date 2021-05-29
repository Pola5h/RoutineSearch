<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //update
   $sql =  " update course set c_name = '$_POST[c_name]',cradit = '$_POST[cradit]' where c_id = '$_POST[c_id]' " ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=cview.php");
   else
	   echo "Not update";
   ?>
