 <div class="section">
    <!-- student-login -->
    <div id="student" class="container">
      <form method="post" action="#" id="student-login" >
        <h1><center>Log In<br><h6>(Students)</h6></center></h1>
        <div class="row">
          <div class="col">
            <input type="text" id="email" name="stu-email" placeholder="Enter Your Email Id" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="password" name="stu-password" placeholder="Enter Your Password" autocomplete="off" required>
          </div>
        </div>
        <div class="row">
          <div  class="col">
            <input type="checkbox" name="remember-me">
            <label for="remeber-me">Remember Me</label>
            <a style="margin-left:60px" href="">Forgot password?</a>
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
      <form method="post" action="./online-examination-systen-in-php-master-1/admin.php?q=index.php">
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

          <div  class="col">
            <input type="checkbox" name="remember-me">
            <label for="remeber-me">Remember Me</label>
            <a style="margin-left:60px" href="">Forgot password?</a>
          </div>
        </div>
          <div class="row">
          <input type="submit" name="submit" value="Log In">
        </div>
      </form>
    </div>
    <!-- admin-login end -->

    <div class="mid"></div>

    <!-- student reg start -->
    <div class="container registration">
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
            <input type="password" id="password" name="password" placeholder="Enter Your Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="password" id="confirm_password" name="cpassword" placeholder="Confirm Password" autocomplete="off">
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
    <!-- student reg end -->
 </div>