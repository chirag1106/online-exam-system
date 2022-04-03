<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./menu.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    require_once("./inc/navbar.php");
    ?>
    <div class="section">
        <div class="feed-container container">
            <center><h4>"Your feedback is valueable to us."</h4></center>
         <form method="Post" action="#"></form>
            <div class="row">
                <div class="col">
                    <input type="text" name="feed-name" id="name" placeholder="Enter Your Full Name"
                    >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="subject" id="subject" placeholder="Enter Subject"
                    >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="email" id="email" placeholder="Enter Your Email Id"
                    >
                </div>
            </div>
            <div class="row">
                <textarea name="feedback" id="feedback"  rows="10" placeholder="Enter Your Message Here"></textarea>
            </div>
            <div class="row">
                <input type="submit" value="Submit" style="left:43%;">
            </div>

        </div>
    </div>

    <?php 
    require_once("./inc/footer.php");
    ?>
</body>

</html>