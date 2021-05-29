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

$sql="INSERT INTO tb_faculty(f_id,f_name,f_dep,contact)VALUES('$_POST[f_id]','$_POST[f_name]','$_POST[f_dep]','$_POST[contact]')";


if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";
	 header('location: fview.php');

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
