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

$sql="INSERT INTO course(c_id,c_name,cradit)VALUES('$_POST[c_id]','$_POST[c_name]','$_POST[cradit]')";


if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";
	 header('location: cview.php');

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
