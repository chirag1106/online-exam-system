<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./js/menu.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>
    <nav class="nav">

        <div class="logo">
            <img src="https://gnindia.dronacharya.info/images/DGI-Logo.png" alt="Dronacharya Group of Institutions">
        </div>

        <ul id="navbar">
            <li><a class="home" href="index.php"><img src="./images/home.png" alt="Home"></a>
                <a class="menu-item ham-home" href="index.php">Home</a>
            </li>
            <li><a class="developer" href="javascript:void(0);"><img src="./images/developer.png" alt="Developer"></a>
                <a class="developer" href="javascript:void(0);">Developer</a>
            </li>
            <li><a class="feedback" href="feedback.php" target="_blank"><img src="./images/feedback.png" alt="Feedback"></a>
                <a class="feedback" href="feedback.php" target="_blank">Feedback</a>
            </li>
        </ul>

        <div id="close" style="display:none" class="ham-menu">
            <img src="./images/close.png" alt="">
        </div>
        <div id="ham" class="ham-menu">
            <img src="./images/menu.png" alt="">
        </div>
    </nav>
    <div class="ham-menu-item" style="display:none">
        <ul>
            <li><a class="ham-home" href="index.php"><img src="./images/home.png" alt="Home"></a></li>
            <li><a class="menu-item ham-home" href="index.php">Home</a></li>

            <li><a class="ham-developer" href="javascript:void(0);"><img src="./images/developer.png" alt="Developer"></a></li>
            <li><a class="menu-item ham-developer" href="javascript:void(0);">Developer</a></li>
            <li><a class="ham-feedback" href="javascript:void(0);"><img src="./images/feedback.png" alt="Feedback"></a></li>
            <li><a class="menu-item ham-feedback" href="feedback.php">Feedback</a></li>
        </ul>
    </div>


    <div class="section dev">
        <div class="profiles">
            <div class="profile ">
                <div class="img-out">
                    <img src="./images/developer.png" alt="">
                </div>
                <div class="info">
                    <div class="empty"></div>

                    <center>
                        <h3>Chirag Gupta</h3>
                    </center>
                    <center>
                        <h6>Full-stack Developer</h6>
                    </center>
                    <center>
                        <h6>E-mail: chiraggupta1106@gmail.com</h6>
                    </center>
                    <div class="social-links">
                        <button>
                            <a href="https://www.github.com/chirag1106"><img src="./images/portfolio.png" alt="Github"></a>

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
                    <center>
                        <h3>Vikrant Tanwar</h3>
                    </center>
                    <center>
                        <h6>Full-stack Developer</h6>
                    </center>
                    <center>
                        <h6>E-mail: vikranttanwar2000@gmail.com</h6>
                    </center>

                    <div class="social-links">
                        <button>
                            <a href="https://vikrant-portfolio.avcno.com"><img src="./images/portfolio.png" alt="Github"></a>

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