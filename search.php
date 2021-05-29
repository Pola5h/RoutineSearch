<?php include'header.php';?>

<html>
<head>
  <style>

  body {
    background-image: url('b.jpg');
     background-size: cover;
  }
   table{ width: 800px;
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
  table1{ width: 800px;
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
<?php  ?>


<center>
<form method="POST" style="text-align:center">

<h3 style="font-size:150%;">Search Form</h3>
<input type="text" style="font-size:100%;"placeholder="Search by Student id"; name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>
</center>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "std";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id,name,dep,area FROM tb_std where id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

echo "<table>";
  echo "<tr><th><center>Id</th><th>Name</th><th>Department</th><th>Area</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>".  $row["id"]. "</td><td>".  $row["name"]. "</td><td>". $row["dep"]."</td><td>" . $row["area"]."</td>";
  echo "</tr>";
    }
echo "</table>";
}
?>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "std";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT tb_std.id,courselist.c_id,tb_faculty.f_name,course.c_name FROM tb_std INNER join courselist on tb_std.id = courselist.id INNER join tb_faculty on tb_faculty.f_id = courselist.f_id inner join course on courselist.c_id = course.c_id where tb_std.id='$id'";
$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) {
    // output data of each row

echo "<table>";
  echo "<tr><th><center>Faculty Name</th><th>Course ID</th><th>Course name</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
		
  echo "<tr>";
 
        echo "<td>".  $row["f_name"]. "</td><td>". $row["c_id"]."</td><td>" . $row["c_name"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else  {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}

mysqli_close($conn);
?>


</center>

<?php  ?>
</html>
<?php include'footer.php';?>
