<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIRON - Facilities</title>
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/hf.css">
    <link rel="stylesheet" href="css/facilities.css">
</head>
<body>

    <!--Header-->
    <div class="bg">
        <header>
            <div class="head">
                <!--Logo-->
                <a href="home.php"><h3 id="logo"><span>V</span>I<span>R</span>O<span>N</span></h3></a>

                <!--Nav-bar-->
                <div class="main-menu">
                    <ul>
                        <a href="home.php"><li>HOME</li></a>
                        <a href="facilities.php"><li class="active">FACILITIES</li></a>
                        <a href="services.php"><li>SERVICES</li></a>
                        <a href="blog.php"><li>BLOG</li></a>
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
            <h1>Browse Our Facilities</h1>
        </div>
    </div>

    <!--Main Body-->
    <div class="main">
        <!--Cafe-->
        <div class="container container-odd" id="con">
            <div class="grid-item cafe img"></div>
            <!--Container Text-->
            <div class="grid-item text">
                <div class="grid-item item1 odd">
                    <!--Offer-->
                    <div class="offer offer1" id="off">
                        <p>Check out our Exiting Offers</p>
                    </div>
                </div>
                <!--Text-->
                <h1 class="grid-item item2">Cafe</h1>
                <p class="grid-item item3">Focusing on the gourmet diner as well as the youth of India, this Café aims to bring Indian cuisine back “in-Vogue”. “Farzi” can have many connotations, but at Farzi Café, it has just one, “creating an illusion” with its cuisine. Best described as a gourmet experience.</p>
                <div class="grid-item item4 odd">
                    <!--Deals-->
                    <div class="offer deal1" id="off">
                        <p><span style="color: #6d4c41; font-size: larger;">%Coffee Deal%</span> Buy 1 Get 1 Free</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-img img-1"></div>
        <!--Restaurant-->
        <div class="container container-even" id="con">
            <div class="grid-item restaurant img"></div>
            <!--Container Text-->
            <div class="grid-item text">
                <div class="grid-item item1">
                    <!--Offer-->
                    <div class="offer offer2" id="off">
                        <p>Check out our Exiting Offers</p>
                    </div>
                </div>
                <!--Text-->
                <h1 class="grid-item item2">Restaurant</h1>
                <p class="grid-item item3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat laborum adipisci eius a, aliquid voluptatibus, illum corporis non, quis possimus ut. Dignissimos aperiam soluta, excepturi veritatis numquam nobis? Modi, nihil fuga ullam omnis iste, sit earum sed libero eaque magnam animi ex. Ipsum sunt commodi temporibus accusamus, error adipisci?</p>
                <div class="grid-item item4">
                    <!--Deals-->
                    <div class="offer deal2" id="off">
                        <p>Flat 20% Off</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-img img-2"></div>
        <!--Pool-->
        <div class="container container-odd" id="con">
            <div class="grid-item pool img"></div>
            <!--Container Text-->
            <div class="grid-item text">
                <div class="grid-item item1 odd">
                    <!--Offer-->
                    <div class="offer offer1" id="off">
                        <p>Check out our Exiting Offers</p>
                    </div>
                </div>
                <!--Text-->
                <h1 class="grid-item item2">Swimming Pool</h1>
                <p class="grid-item item3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat laborum adipisci eius a, aliquid voluptatibus, illum corporis non, quis possimus ut. Dignissimos aperiam soluta, excepturi veritatis numquam nobis? Modi, nihil fuga ullam omnis iste, sit earum sed libero eaque magnam animi ex. Ipsum sunt commodi temporibus accusamus, error adipisci?</p>
                <div class="grid-item item4 odd">
                    <!--Deals-->
                    <div class="offer deal1" id="off">
                        <p>Special Coupons for kids</p>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="bg-img img-3"></div>
        <!--Game Room-->
        <div class="container container-even" id="con">
            <div class="grid-item gameroom img"></div>
            <!--Container Text-->
            <div class="grid-item text">
                <div class="grid-item item1">
                    <!--Offer-->
                    <div class="offer offer2" id="off">
                        <p>Check our Newly installed Games</p>
                    </div>
                </div>
                <!--Text-->
                <h1 class="grid-item item2">Game Room</h1>
                <p class="grid-item item3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat laborum adipisci eius a, aliquid voluptatibus, illum corporis non, quis possimus ut. Dignissimos aperiam soluta, excepturi veritatis numquam nobis? Modi, nihil fuga ullam omnis iste, sit earum sed libero eaque magnam animi ex. Ipsum sunt commodi temporibus accusamus, error adipisci?</p>
                <div class="grid-item item4">
                    <!--Deals-->
                    <div class="offer deal2" id="off">
                        <p>Newly Added Table Tennis</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-img img-4"></div>
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
        
        <!--Copyright-->
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