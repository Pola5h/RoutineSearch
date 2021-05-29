<html>
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
</html>
