<?php include'header.php';?>
<html>
<head>
<center>
<style>

body {
  background-image: url('b.jpg');
   background-size: cover;
}
table{

width: 800px;
margin:auto;
text-align:center;
margin-top:30px;
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

<table border= 1 cellpadding =1 cellspacing =1>
<h7 style="color:White;">ALL student Informetion.</h7>
   <tr>
   <th>Id</th>
   <th>Name</th>
   <th>Department</th>
   <th>Area</th>

   </tr>

   <?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //select
   $sql =  " select * from tb_std";
   //execute
   $records=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($records))
   {
   echo"<tr>";
   echo"<td>".$row['id']."</td>";
    echo"<td>".$row['name']."</td>";
	 echo"<td>".$row['dep']."</td>";
	  echo"<td>".$row['area']."</td>";
   }
   ?>
   </table>
   </center>
</body>
</html>
<?php include'footer.php';?>
