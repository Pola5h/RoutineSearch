<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //update
   $sql =  " update tb_std set name = '$_POST[name]',dep = '$_POST[dep]',area = '$_POST[area]' where id = '$_POST[id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=view.php");
   else
	   echo "Not update";
   ?>
