<!DOCTYPE html>
<?php include'header.php';?>

<html>
<head>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<style>
 body {
  background-image: url('b.jpg');
   background-size: cover;
}
.aa{
  width: 300px;
  height: 120px;
  background-color: rgba(0,0,0,0.5);
  margin: 0 auto;
  margin-top: 40px;
  padding-top: 10px;
  padding-left: 0px;
   border-radius: 15px;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  -ms-border-radius: 15px;
  -o-border-radius: 15px;

  color:white;
  font-weight: bolder;
  -webkit-box-shadow: inset -4px -4px rgba(0,0,0,0.5);
  box-shadow: inset -4px -4px rgba(0,0,0,0.5);
  font-size: 18px;
 }
</style>
</head>
<body>
<div class="aa">
<center><h4 style="color:white;">Insert Info </h4>
 <input type="button" value="Student" onclick="window.location.href='sfrom.php'" />
  <input type="button" value="Faculty" onclick="window.location.href='ffrom.php'" />
  <input type="button" value="Course" onclick="window.location.href='cfrom.php'" />

<center/>

</body>
<br>
</html>
