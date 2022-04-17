<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGI | Faculty Registration</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../js/menu.js" type="text/javascript"></script>
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <img src="https://gnindia.dronacharya.info/images/DGI-Logo.png" alt="Dronacharya Group of Institutions" loading="lazy">
        </div>
        <!--  <ul id="navbar">
            <li><a class="home" href="javascript:void(0)"><img src="../images/home.png" alt="Home"></a>
                <a class="menu-item ham-home" href="javascript:void(0)">Home</a>
            </li>
            <li><a class="admin" href="javascript:void(0);"><img src="../images/admin.png" alt="Admin"></a>
                <a class="admin" href="javascript:void(0);">Faculty</a>
            </li>
            <li><a class="developer" href="javascript:void(0);"><img src="../images/developer.png" alt="Developer"></a>
                <a class="developer" href="javascript:void(0);">Developer</a>
            </li>
            <li><a class="feedback" href="feedback.php" target="_blank"><img src="../images/feedback.png" alt="Feedback"></a>
                <a class="feedback" href="feedback.php" target="_blank">Feedback</a>
            </li>
        </ul>

        <div id="close" style="display:none" class="ham-menu">
            <img src="../images/close.png" alt="">
        </div>
        <div id="ham" class="ham-menu">
            <img src="../images/menu.png" alt="">
        </div>-->
    </nav>
    <!-- <div class="ham-menu-item" style="display:none"> 
        <ul>
            <li><a class="ham-home" href="javascript:void(0)"><img src="../images/home.png" alt="Home"></a></li>
            <li><a class="menu-item ham-home" href="javascript:void(0)">Home</a></li>
            <li><a class="ham-admin" href="javascript:void(0);"><img src="../images/admin.png" alt="Admin"></a></li>
            <li><a class="menu-item ham-admin" href="javascript:void(0);">Faculty</a></li>
            <li><a class="ham-developer" href="javascript:void(0);"><img src="../images/developer.png" alt="Developer"></a></li>
            <li><a class="menu-item ham-developer" href="javascript:void(0);">Developer</a></li>
            <li><a class="ham-feedback" href="javascript:void(0);"><img src="../images/feedback.png" alt="Feedback"></a></li>
            <li><a class="menu-item ham-feedback" href="feedback.php">Feedback</a></li>
        </ul>
    </div> -->
    <div class="notice-banner" style="padding:10px; margin:5px; color:red;">
        <marquee behavior="scroll" direction="left"><span style="color: blue;">NOTICE :</span> Site is in under maintainenace, Work is in progress.</marquee>
    </div>
    <div class="section">
        <div class="container registration">
            <form method="POST" id="fsignup">
                <h1>
                    <center>
                        Sign Up
                        <h6>(Faculty)</h6>
                    </center>
                </h1>
                <div class="row">
                    <div class="col">
                        <input type="text" id="fname" name="fname" placeholder="Your Full Name" autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" id="femail" name="femail" placeholder="Your Email Id" autocomplete="off" required>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col">
                        <input type="text" id="ucollege" name="ucollege" placeholder="Enter College Name" autocomplete="off" required>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col">
                        <select id="fgender" name="fgender" required>
                            <option value="#">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="number" id="fphoneNo" name="fphoneno" placeholder="Enter Your Mobile Number" autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" id="fpassword" name="fpassword" placeholder="Enter Your Password" autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" id="fcpassword" name="fcpassword" placeholder="Confirm Password" autocomplete="off" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="user_err_report user_success_report"></span>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col">
                        <span id="user_success_report"></span>
                    </div>
                </div> -->
                <div class="row">
                    <input type="submit" value="Sign Up" id="faculty_signup" name="fsubmit">
                </div>
            </form>
        </div>
        <!-- student reg end -->
    </div>
    <?php
    // require_once '../inc/content.php';
    require_once '../inc/footer.php';
    ?>
</body>

</html>