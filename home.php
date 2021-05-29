<!DOCTYPE html>

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
<center><h4 style="color:white;">IUBAT information System</h4>
 <input type="button" value="View" onclick="window.location.href='V.php'" />
 <input type="button" value="Insert" onclick="window.location.href='i.php'" />
  <input type="button" value="Search" onclick="window.location.href='s.php'" />
  <?php include'print.php';?>

<center/>

</body>
<br>
</html>
<?php include'footer.php';?>
