<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DGI | TEST YOUR SKILL </title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="menu.js" type="text/javascript"></script>
  <?php if (isset($_GET['w']) && !empty($_GET['w'])) {
    echo '<script>alert("' . $_GET['w'] . '");</script>';
  }
  ?>
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

<body>

  <nav class="nav">
    <div class="logo">
      <img src="https://gnindia.dronacharya.info/images/DGI-Logo.png" alt="Dronacharya Group of Institutions">
    </div>
    <ul>
      <li><a class="admin" href="javascript:void(0);"><img src="admin.png" alt="Admin"></a></li>
      <a class="admin" href="javascript:void(0);">Admin</a>
      <li><a class="developer" href="javascript:void(0);"><img src="developer.png" alt="Admin"></a></li>
      <a class="developer" href="javascript:void(0);">Developer</a>
      <li><a class="feedback" href="javascript:void(0);"><img src="feedback.png" alt="Admin"></a></li>
      <a class="feedback" href="./online-examination-systen-in-php-master-1/feedback.php" target="_blank">Feedback</a>
    </ul>

    <div id="close" style="display:none" class="ham-menu">
      <img src="close.png" alt="">
    </div>
    <div id="ham" class="ham-menu">
      <img src="menu.png" alt="">
    </div>
  </nav>
  <div class="ham-menu-item" style="display:none">
    <ul>
      <li><a class="admin" href="javascript:void(0);"><img src="admin.png" alt="Admin"></a></li>
      <li><a class="menu-item admin" href="javascript:void(0);">Admin</a></li>
      <li><a class="developer" href="javascript:void(0);"><img src="developer.png" alt="Admin"></a></li>
      <li><a class="menu-item developer" href="javascript:void(0);">Developer</a></li>
      <li><a class="feedback" href="javascript:void(0);"><img src="feedback.png" alt="Admin"></a></li>
      <li><a class="menu-item feedback" href="javascript:void(0);">Feedback</a></li>
    </ul>
  </div>
  <div class="section">
    
    <!-- student-login -->
    <div id="student" class="container">
      <form>
        <h1><center>Log In<br><h6>(Students)</h6></center></h1>
        <div class="row">
          <div class="col">
            <input type="text" id="email" name="stu-email" placeholder="Enter Your Email Id" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="password" name="stu-password" placeholder="Enter Your Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Log In">
        </div>
      </form>
    </div>
    <!-- student-login end -->

    <!-- admin-login  -->
    <div id="admin" class="container">
      <form method="POST" action="#">
        <h1><center>Log In<br><h6>(Administrator)</h6></center></h1>
        <div class="row">
          <div class="col">
            <input type="text" id="email" name="admin-email" placeholder="Enter Your Email Id" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="password" name="admin-password" placeholder="Enter Your Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Log In">
        </div>
      </form>
    </div>
    <!-- admin-login end -->

    <div class="mid"></div>

    <!-- student reg start -->
    <div class="container">
      <form method="POST" action="#">
        <h1>
          <center>Sign Up</center>
        </h1>
        <div class="row">
          <div class="col">
            <input type="text" id="full_name" name="name" placeholder="Your Full Name" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="email" name="email" placeholder="Your Email Id" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <select id="country" name="Gender">
              <option value="#">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="number" id="Mobile_no" name="phone" placeholder="Enter Your Mobile Number" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="password" name="password" placeholder="Enter Your Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="confirm_password" name="cpassword" placeholder="Confirm Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
    <!-- student reg end -->
  </div>

  <div style="padding-top:10px" class="footer Cositas-Rorey-2-4-hex">
    <center>&copy;<script>document.write(new Date().getFullYear())</script><br>Developed and Designed by Chirag Gupta and Vikrant Tanwar.</center>
  </div>
</body>

</html>