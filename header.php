<html>
<header>
 <br>
 <center>
<input type="button" value="Home" onclick="window.location.href='home.php'" />
    <input type="button" value="Insert" onclick="window.location.href='i.php'" />
<input type="button" value="View" onclick="window.location.href='V.php'" />
  <input type="button" value="Edit" onclick="window.location.href='u.php'" />
    <input type="button" value="Search" onclick="window.location.href='s.php'" />
   <input type="button" onclick="printDiv('printableArea')" value="Report"/>

  <article class="article">
  <div class="table"><div id="printableArea">
     <table border="1" align="center">
       </div>


  <script>

  function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }</script>
  </div>


			</center></header>
			</html>
