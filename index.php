<?php
session_start();
?>

<div id="respons"></div>


<script>
  setInterval(function() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "/bappi nnn test folder/respons.php", false);
    xmlhttp.send(null);
    document.getElementById("respons").innerHTML = xmlhttp.responseText;
  }, 1000);
</script>