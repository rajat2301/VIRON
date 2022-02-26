<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viron - Blogs</title>
    <link rel="stylesheet" href="css/hf.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/icomoon.css">
</head>
<body>
      
    <!--Header-->
    <div class="bg">
        <header>
            <div class="head">
                <a href="index.php"><h3 id="logo"><span>V</span>I<span>R</span>O<span>N</span></h3></a>
                <div class="main-menu">
                    <ul>
                        <a href="index.php"><li>HOME</li></a>
                        <a href="facilities.php"><li>FACILITIES</li></a>
                        <a href="services.php"><li>SERVICES</li></a>
                        <a href="blog.php"><li class="active">BLOG</li></a>
                        <a href="contact.php"><li>CONTACT US</li></a>
                        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                            <div class="dropdown">
                                <li class="drop-btn">Hi, <?php echo $_SESSION['user'] ?></li>
                                <div class="dropdown-content">
                                    <a href="logout.php">Log Out</a>
                                </div>
                            </div> 
                        <?php } else { ?>
                            <a href="login.php">
                            <li>Login/Register</li>
                        </a>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </header>
    <div class="title">
            <h1>Read Our Blog</h1>
    </div>
    </div>

    <!--Main Body-->
    <div class="main">

        <!--Comment 1-->
        <div class="container container-1">
                <div class="date">09<br>AUG</div>
                <div class="review img1"></div>
                <div class="text">
                    <p class="comment"><b>Most Expensive Hotel</b></p>
                </div>
                <div class="hidden-review">
                    <h3>Alex Michael Says..</h3>
                    <img src="images/rating.PNG" alt="" class="rating">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
                </div>
        </div>

        <!--Comment 2-->
        <div class="container container-2">
            <div class="date">05<br>SEPT</div>
            <div class="review img2" id="comment-img"></div>
            <div class="text" id="comment-text">
                <p class="comment"><b>1st Anniversary Celebration</b></p>
            </div>
            <div class="hidden-review">
                <h3>Alex Michael Says..</h3>
                <img src="images/rating.PNG" alt="" class="rating">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
            </div>
        </div>

        <!--Comment 3-->
        <div class="container container-3">
            <div class="date">26<br>JUL</div>
            <div class="review img3"></div>
            <div class="text">
                <p class="comment"><b>Delicious Food</b></p>
            </div>
            <div class="hidden-review">
                <h3>Alex Michael Says..</h3>
                <img src="images/rating.PNG" alt="" class="rating">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
            </div>
        </div>

        <!--Comment 4-->
        <div class="container container-4">
            <div class="date">16<br>JAN</div>
            <div class="review img4"></div>
            <div class="text">
                <p class="comment"><b>Comfy Beds</b></p>
            </div>
            <div class="hidden-review">
                <h3>Alex Michael Says..</h3>
                <img src="images/rating.PNG" alt="" class="rating">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
            </div>
        </div>

        <!--Comment 5-->
        <div class="container container-5">
            <div class="date">01<br>MAY</div>
            <div class="review img5"></div>
            <div class="text">
                <p class="comment"><b>Nice for Vacation</b></p>
            </div>
            <div class="hidden-review">
                <h3>Alex Michael Says..</h3>
                <img src="images/rating.PNG" alt="" class="rating">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
            </div>
        </div>

        <!--Comment 6-->
        <div class="container container-6">
            <div class="date">21<br>APR</div>
            <div class="review img6"></div>
            <div class="text">
                <p class="comment"><b>Great Place</b></p>
            </div>
            <div class="hidden-review">
                <h3>Alex Michael Says..</h3>
                <img src="images/rating.PNG" alt="" class="rating">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor est nihil obcaecati hic nostrum sed soluta pariatur praesentium quod reprehenderit iure necessitatibus facilis, maxime inventore explicabo aperiam, placeat esse modi asperiores ratione fuga. Magni, consectetur? At illum nemo odio necessitatibus sed repellendus magnam, mollitia, placeat hic cupiditate aperiam eligendi provident?</p>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <div class="foot">
        
        <!--Social Media Links-->
        <div class="social-media">
            <ul>
                <a href="#"><img src="images/twitter.png" alt="" id="twitter"></a>
                <a href="#"><img src="images/fb.png" alt="" id="foot-fb"></a>
                <a href="#"><img src="images/insta.png" alt="" id="insta"></a>
                <a href="#"><img src="images/linkedin.png" alt="" id="linkedin"></a>
            </ul>    
        </div>

        <!--Text-->
        <div class="help">
            <ul>
                <a href="#">
                    <li>About Us</li>
                </a><a href="#">
                    <li>Customer Care</li>
                </a><a href="#">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>
        
        <p>&copy; 2021 Resort Website</p>
        <p>Collaborative Work by: Rajat Bansal, Nilesh Agrawal, Vaibhav Gandhi</p>
    </div>

    <script>
        window.addEventListener('scroll',function(){
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 350;
            header.classList.toggle('scrolling-active',windowPosition);
        })
    </script>
    
    </body>
</html>