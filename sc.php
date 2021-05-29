<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "std";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO tb_std(id,name,dep,area)VALUES('$_POST[id]','$_POST[name]','$_POST[dep]','$_POST[area]')";


if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";
	 header('location: view.php');

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
