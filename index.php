<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DGI | TEST YOUR SKILL </title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="./css/fontawesome/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="./js/menu.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  
</head>

<body onload="rloader()">
<div id="loader">

<div class="loader-border-wrap">
    
    <div class="loader">
        <span class="bg">A</span>
        <span class="bg">C</span>
        <span class="bg">A</span>
        <span class="bg">D</span>
        <span class="bg">M</span>
        <span class="bg">E</span>
        <span class="bg">I</span>
        <span class="bg">S</span>
        <span class="bg">T</span>
    </div>
</div>
</div>
  <?php
  require_once("./inc/navbar.php");
  require_once("./inc/content.php");
  require_once("./inc/footer.php");
  ?>
  <script>
    function rloader() {
      var loader = document.getElementById("loader");
      setTimeout(() => {
        loader.style.display = "none";
      }, 3000);
    }
  </script>
</body>

</html>