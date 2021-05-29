<!DOCTYPE html>
<?php include'header.php';?>
<html>
<body>
<style>
 body {
  background-image: url('b.jpg');
   background-size: cover;
}

</style>
<center>
<fieldset>
<legend> <h1>Faculty Forms</h1> </legend>

<h2>
<form action="fc.php" method="POST">
  ID:
  <input type="text" name="f_id" value="">
  <br>
  Name:
  <input type="text" name="f_name" value="">
  <br>
 Department:
  <input type="text" name="f_dep" value="">
  <br>
  Contact:
  <input type="text" name="contact" value="">
  <br><br>
  <input type="submit" value="Submit">
  </h2>
</fieldset>

</form>
</center>
<footer>

    </a>

 </footer>

</body>
</html>

<?php include'footer.php';?>
