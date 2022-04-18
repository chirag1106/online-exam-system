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
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>
</head>

<body onload="rloader()">
  <div id="loader">
    <div id="loader-img"></div>
    <span id="loader-content"><center>Dronacharya Group Of Institutions<center></span>
  </div>
  <?php
  require_once("./inc/navbar.php");
  require_once("./inc/content.php");
  require_once("./inc/footer.php");
  ?>
  <script>
    function rloader(){
      var loader = document.getElementById("loader");
      setTimeout(() => {loader.style.display = "none";},3000);
    }
  </script>
</body>

</html>