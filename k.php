<?php
$con=mysqli_connect("localhost","root","","std");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT courselist.c_id,tb_faculty.f_name,course.c_name FROM tb_std INNER join courselist on tb_std.id = courselist.id INNER join tb_faculty on tb_faculty.f_id = courselist.f_id inner join course on courselist.c_id = course.c_id where tb_std.id='$id'";

$sql .= "SELECT  *  FROM course";

// Execute multi query
if (mysqli_multi_query($con,$sql))
{
  do
    {
    // Store first result set
    if ($result=mysqli_store_result($con)) {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        printf("%s\n",$row[0]);
        }
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}

mysqli_close($con);
?>
