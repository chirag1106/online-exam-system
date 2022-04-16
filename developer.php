<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./menu.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <?php require_once("./inc/navbar.php"); ?>
    
    <div class="section dev">
        <div class="profiles">
            <div class="profile ">
                <div class="img-out">
                    <img src="./images/developer.png" alt="">
                </div>
                <div class="info">
                    <div class="empty"></div>

                    <center><h3>Chirag Gupta</h3></center>
                    <center><h6>Full-stack Developer</h6></center>
                    <center><h6>E-mail: chiraggupta1106@gmail.com</h6></center>
                    <div class="social-links">
                        <button>
                            <a  href="https://www.github.com/chirag1106"><img  src="./images/portfolio.png" alt="Github"></a>
                            
                        </button>
                        <button>
                            <img src="./images/linkedin.png" alt="LinkedIn">
                            
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="mid red"></div> -->

            <div class="profile">
                <div class="img-out">
                    <img src="./images/developer.png" alt="">
                </div>
                
                <div class="info">
                    <div class="empty"></div>
                    <center><h3>Vikrant Tanwar</h3></center>
                    <center><h6>Full-stack Developer</h6></center>
                    <center><h6>E-mail: vikranttanwar2000@gmail.com</h6></center>

                    <div class="social-links">
                                <button>
                                    <a  href="https://vikrant-portfolio.avcno.com"><img  src="./images/portfolio.png" alt="Github"></a>
    
                                </button>
                                
                                <button>
                                    <img src="./images/linkedin.png" alt="LinkedIn">
    
                                </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require_once("./inc/footer.php"); ?>
</body>
</html>