<?php include'header.php';?>
<br>
<html>
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
  margin-top:15px;
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
<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'std');
   //select
   $sql =  " select * from tb_std";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <center>
<h7 style="color:White;">Edit Informetion.</h7>
   <table>
   <tr>
   <th>Id</th>
   <th>Name</th>
   <th>Department</th>
   <th>Area</th>
      <th>  </th>

   </tr>
 </center>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = update.php method=post>";
   echo"<td><input type = number name=id value='".$row['id']."'></td>";
   echo"<td><input type = text name=name value='".$row['name']."'></td>";
   echo"<td><input type = text name=dep value='".$row['dep']."'></td>";
   echo"<td><input type = text name=area value='".$row['area']."'></td>";
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>
</table>
</body>
</center>
   </html>

<?php include'footer.php';?>
