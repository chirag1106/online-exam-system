  <div class="notice-banner" style="padding:10px; margin:5px; color:red;">
    <marquee behavior="scroll" direction="left"><span style="color: blue;">NOTICE :</span> Site is in under maintainenace, Work is in progress.</marquee>
  </div>
  <div class="section">
    <!-- student-login -->
    <div id="student" class="container">
      <form method="post" action="#" id="student-login">
        <h1>
          <center>Log In<br>
            <h6>(Students)</h6>
          </center>
        </h1>
        <div class="row">
          <div class="col">
            <input type="text" id="email" name="stu-email" placeholder="Enter Your Email Id" autocomplete="off" value="<?php if(isset($_COOKIE['se'])){echo $_COOKIE['se'];}else{echo '';} ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="password" name="stu-password" placeholder="Enter Your Password" autocomplete="off" value="<?php if(isset($_COOKIE['sp'])){echo $_COOKIE['sp'];}else{echo '';} ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="checkbox" >
              <input type="checkbox" name="remember-me" <?php if(isset($_COOKIE['se'])){ ?> checked <?php } ?>>
              <label for="remeber-me">Remember Me</label>
              <a style="margin-left:60px" href="#">Forgot password?</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <span id="err_report"></span>
          </div>
        </div>
        <div class="row">
          <input type="submit" name="stu-submit" id="stu-submit" value="Log In">
        </div>
      </form>
    </div>
    <!-- student-login end -->

    <!-- admin-login  -->
    <div id="admin" class="container">
      <form method="post" action="#" id="admin-login">
        <h1>
          <center>Log In<br>
            <h6>(Faculty)</h6>
          </center>
        </h1>
        <div class="row">
          <div class="col">
            <input type="text" id="admin-email" name="admin-email" placeholder="Enter Your Email Id" autocomplete="off" value="<?php if(isset($_COOKIE['ae'])){echo $_COOKIE['ae'];}else{echo '';} ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="admin-password" name="admin-password" placeholder="Enter Your Password" autocomplete="off" value="<?php if(isset($_COOKIE['ap'])){echo $_COOKIE['ap'];}else{echo '';} ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="checkbox" name="remember-me" <?php if(isset($_COOKIE['ae'])){ ?> checked <?php } ?>>
            <label for="remeber-me">Remember Me</label>
            <a style="margin-left:60px" href="#">Forgot password?</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <span id="admin_err_report"></span>
          </div>
        </div>
        <div class="row">
          <input type="submit" name="submit" id="admin-submit" value="Log In">
        </div>
      </form>
    </div>
    <!-- admin-login end -->

    <div class="mid"></div>

    <!-- student reg start -->
    <div class="container registration">
      <form method="POST" action="" id="usignup">
        <h1>
          <center>Sign Up</center>
        </h1>
        <div class="row">
          <div class="col">
            <input type="text" id="uname" name="uname" placeholder="Your Full Name" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="uemail" name="uemail" placeholder="Your Email Id" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" id="ucollege" name="ucollege"  placeholder="Enter College Name" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <select id="ugender" name="ugender" required >
              <option value="#">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="number" id="uphoneNo" name="uphoneno" placeholder="Enter Your Mobile Number" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="upassword" name="upassword" placeholder="Enter Your Password" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="ucpassword" name="ucpassword" placeholder="Confirm Password" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <span id="user_err_report"></span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <span id="user_success_report"></span>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Sign Up" id="user_signup" name="usubmit">
        </div>
      </form>
    </div>
    <!-- student reg end -->
  </div>