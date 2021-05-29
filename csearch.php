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
    </style>
</head>
<?php  ?>


<center>
<form method="POST" style="text-align:center">

<h3 style="font-size:150%;">Search Form</h3>
<input type="text" style="font-size:100%;"placeholder="Search by Course id"; name="search_id"><br>
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
$c_id="";
if(isset($_POST["search_id"])){
$c_id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT c_id,c_name,cradit FROM  course where c_id ='$c_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<tr><th><center>Course id</th><th>Course name</th><th>Cradit Hour</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>".  $row["c_id"]. "</td><td>". $row["c_name"]."</td><td>" . $row["cradit"]."</td>";
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
