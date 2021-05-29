<?php include'header.php';?>
<html>
<br>
<head>
<center>
<style>

body {
  background-image: url('b.jpg');
   background-size: cover;
}
table{ width: 800px;
margin:auto;
text-align:center;
margin-top:10px;
color:  #ffff; }
table,th,td{
	border:3px solid gray;
	border-collapse:collapse;
	padding:15px;
	font-size:15px;
}
  </style>
  </head>
<body>
<h7 style="color:White;">Edit course Informetion.</h7>
<table>
   <tr>
   <th>Course Id</th>
   <th>Course Name</th>
   <th>Cradit/Hour</th>
   <th>Delete</th>
   <th>Update</th>
   </tr>

   <?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //select
   $sql =  " select * from course";
   //execute
   $records=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($records))
   {
   echo"<tr>";
   echo"<td>".$row['c_id']."</td>";
    echo"<td>".$row['c_name']."</td>";
	  echo"<td>".$row['cradit']."</td>";
	 echo "<td><a href=cdelete.php?c_id=".$row['c_id'].">Delete</a></td>";
	  echo "<td><a href=cup.php?c_id=".$row['c_id'].">Update</a></td>";
   }
   ?>
   </table>
   </center>



</body>
</html>
<?php include'footer.php';?>
