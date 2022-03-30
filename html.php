<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">
<title>DGI | TEST YOUR SKILL </title>
 <script src="js/jquery.js" type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>

  <nav class="nav Treasurana---Geocaching-App-2-hex">
    <div class="logo">
      <img src="https://gnindia.dronacharya.info/images/DGI-Logo.png" alt="Dronacharya Group of Institutions">
    </div>
  </nav>
  <div class="section">
  <div class="container Treasurana---Geocaching-App-2-hex">
  <form action="/action_page.php">
    <div class="row">
      
      <div class="col">
        <input type="text" id="full_name" name="full_name" placeholder="Your full name..">
      </div>
    </div>
    <div class="row">
      
      <div class="col">
        <input type="text" id="email" name="email" placeholder="Your Email Id..">
      </div>
    </div>
    <div class="row">
      
      <div class="col">
        <select id="country" name="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
    <div class="row">
      
      <div class="col">
        <input type="text" id="college_name" name="college_name" placeholder="Enter Your College Name">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="number" id="Mobile_no" name="Mobile_no" placeholder="Enter Your Mobile Number">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" id="password" name="password" placeholder="Enter Your Password">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
  </div>

  <div class="footer Treasurana---Geocaching-App-1-hex">
    <ul>
      <li><a href="">ADMIN</a></li>
      <li><a href="">DEVELOPERS</a></li>
      <li><a href="">FEEDBACK</a></li>
    </ul>
  </div>
</body>
</html>
