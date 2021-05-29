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
   $sql =  " select * from course";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <center>
<h7 style="color:White;">Update course Informetion.</h7>
   <table>
   <tr>
   <th>Curse Id</th>
   <th>Course Name</th>
   <th>Cradit/hour</th>

      <th>  </th>

   </tr>
 </center>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = cupdate.php method=post>";
   echo"<td><input type = number name=c_id value='".$row['c_id']."'></td>";
   echo"<td><input type = text name=c_name value='".$row['c_name']."'></td>";
   echo"<td><input type = text name=cradit value='".$row['cradit']."'></td>";
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>
</table>
</body>
</center>
   </html>

<?php include'footer.php';?>
