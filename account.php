<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="./js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>DGI | TEST YOUR SKILL </title>
</head>
<style>
    
</style>
<body>
<nav class="nav" >
    <div class="logo" >
      <img src="https://gnindia.dronacharya.info/images/DGI-Logo.png" alt="Dronacharya Group of Institutions">
    </div>
    <button id="sign-out"type="button" ><img src="images/sign-out.png" alt="">Sign Out</button>
    <button  id="sign-out-icon" style="display:none"><img src="images/sign-out.png" alt=""></button>
</nav>

<div class="section-acc">
    <div class="sub-menu">
        <ul class="sub">
            <li class="sub-menu-link"><a  href=""><img src="./images/icon.png" alt="">Home</a></li>
            <li class="sub-menu-link"><a  href=""><img src="./images/icon.png" alt="">History</a></li>
            <li class="sub-menu-link"><a  href=""><img src="./images/icon.png" alt="">Ranking</a></li>
            <li class="sub-menu-link"><a  href=""><img src="./images/icon.png" alt="">Feedback</a></li>
        </ul>
        <div id="close" style="display:none;margin-top:10px;" class="ham-menu">
      <img src="./images/close.png" alt="">
    </div>
    <div id="ham" style="margin-top:10px;" class="ham-menu">
      <img src="./images/menu.png" alt="">
    </div>
    </div>
    <div class="ham-menu-item ham-account" style="">
    <ul>
      <li><a class="ham-home" href="javascript:void(0)"><img src="./images/home.png" alt="Home"></a></li>
      <li><a class="menu-item ham-home" href="javascript:void(0)">Home</a></li>
      <li><a class="ham-admin" href="javascript:void(0);"><img src="./images/admin.png" alt="Admin"></a></li>
      <li><a class="menu-item ham-admin" href="javascript:void(0);">Admin</a></li>
      <li><a class="ham-developer" href="javascript:void(0);"><img src="./images/developer.png" alt="Developer"></a></li>
      <li><a class="menu-item ham-developer" href="javascript:void(0);">Developer</a></li>
      <li><a class="ham-feedback" href="javascript:void(0);"><img src="./images/feedback.png" alt="Feedback"></a></li>
      <li><a class="menu-item ham-feedback" href="feedback.php">Feedback</a></li>
    </ul>
  </div>
    <div class="home-index">
        <div class="row">

        </div>
    </div>
</div>

<?php require_once("./inc/footer.php"); ?>
    
</body>

</html>