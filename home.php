
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIRON - Home Page</title>
    <link rel="stylesheet" href="css/hf.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
        <header>
            <div class="head">
                <a href="home.php">
                    <h3 id="logo"><span>V</span>I<span>R</span>O<span>N</span></h3>
                </a>
                <div class="main-menu home">
                    <ul>
                        <a href="facilities.php">
                            <li>FACILITIES</li>
                        </a>
                        <a href="services.php">
                            <li>SERVICES</li>
                        </a>
                        <a href="blog.php">
                            <li>BLOG</li>
                        </a>
                        <a href="contact.php">
                            <li>CONTACT US</li>
                        </a>
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

    <!--SlideShow-->
    <div class="slider">
        
        <div class="slides">
            
            <div class="text">
                <!--Successful Login-->
                <?php if(isset($_SESSION['suc-msg']) && !empty($_SESSION['suc-msg'])) { ?>
                <div class="suc-msg">
                    <?php echo $_SESSION['suc-msg']; ?>
                </div>
                <?php
                unset($_SESSION['suc-msg']);
                }?>
                <div>Deluxe Bungalows Get the Most<br> Super Suitable Room</div>
            </div>
        </div>
        <div class="slides">
            <div class="text">Enjoy the visit</div>
        </div>
        <div class="slides">
            <div class="text">Visit Us</div>
        </div>
    </div>

    <!--Rooms-->
    <div class="rooms">
        <h1>Our Rooms & Rates</h1>
        <!--Room 1-->
        <div class="room room-1" id="room">
            <div class="room-img img-1" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Luxury Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    3200 Per Night
                </div>
            </div>
        </div>

        <!--Room 2-->
        <div class="room room-2" id="room">
            <div class="room-img img-2" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Single Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    3000 Per Night
                </div>
            </div>
        </div>

        <!--Room 3-->
        <div class="room room-3" id="room">
            <div class="room-img img-3" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Double Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    3500 Per Night
                </div>
            </div>
        </div>

        <!--Room 4-->
        <div class="room room-4" id="room">
            <div class="room-img img-4" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Family Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    3700 Per Night
                </div>
            </div>
        </div>

        <!--Room 5-->
        <div class="room room-5" id="room">
            <div class="room-img img-5" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Deluxe Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    2700 Per Night
                </div>
            </div>
        </div>

        <!--Room 6-->
        <div class="room room-6" id="room">
            <div class="room-img img-6" id="room-img"></div>
            <div class="price">
                <div class="row-1">
                    <h2>Presidential Room</h2>
                    <img src="images/rating1.png" alt="">
                </div>
                <div class="row-2">
                    3000 Per Night
                </div>
            </div>
        </div>        
    </div>

    
    <!--Reception-->
    <div class="flex-container">
        <div class="flex-direct">
            <div>
                <h1>
                    You Easily Reserve the Desire<br>Things That Makes All of Your<br>Happiness & Joys
                </h1>
            </div>
            <div>
                <p>
                    This is one of the most important and crucial facts that helps us to make one of 
                    the booking easily. This booking will help you to make your journey and trip 
                    period easily.This will help you to make a journey more easier and that an easier   
                    journey is more useful for you. So, let's start!
                </p>
            </div>
        </div>
        <div><img src="images/booking.jpg" alt=""></div>
    </div>
    
    <!--Customer Says-->
    <div class="container">
        <div class="heading">
            <h2>HAPPY CUSTOMER SAYS...</h2>
        </div>
        <div class="flex-cont">

            <!--Testimonial-1-->
            <div class="cont">
                <img src="images/comma.jpg" alt="comma">
                <div class="txt">
                    <p>
                        You can easily make a good and easily the best service from this agency. This is one
                        of the best and crucial service for us.
                    </p>
                </div>
                <div class="pictures"><img src="images/testimonials-img3.jpg" alt="Images"></div>
                <div class="name-city">
                    <h3>Tyrone Morgan</h3>
                    <p>New Jersey</p>
                </div>
            </div>

            <!--Testimonial-2-->
            <div class="cont">
                <img src="images/comma.jpg" alt="comma">
                <div class="txt">
                    <p>
                        You can easily make a good and easily the best service from this agency. This is one
                        of the best and crucial service for us.
                    </p>
                </div>
                <div class="pictures"><img src="images/testimonials-img2.jpg" alt="Images"></div>
                <div class="name-city">
                    <h3>Harriet Johnson</h3>
                    <span>London City</span>
                </div>
            </div>

            <!--Testimonial-3-->
            <div class="cont"> 
                <img src="images/comma.jpg" alt="comma">
                <div class="txt">
                    <p>
                        You can easily make a good and easily the best service from this agency. This is one
                        of the best and crucial service for us.
                    </p>
                </div>
                <div class="pictures"><img src="images/testimonials-img4.jpg" alt="Images"></div>
                <div class="name-city">
                    <h3>Julia Rose</h3>
                    <span>Budapest</span>
                </div>
            </div>
        </div>
    </div>
 
    <!--Team Members-->
    <div class="team">
        <h1>Meet Our Team</h1>
        <!--Nilesh-->
        <div class="member m-1" id="con">
            <div class="name" id="mem">
                <h2>Nilesh Agarwal</h2>
                <ul>
                    <li><a href="https://www.facebook.com/nilesh.agarwal.73744" target="_"><img src="images/fb.png" alt="" id="fb"></a></li>
                    <li><a href="https://www.instagram.com/nileshagarwal4/" target="_"><img src="images/insta.png" alt=""></a></li>
                    <li><a href="https://twitter.com/NileshAgarwal23" target="_"><img src="images/twitter.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!--Rajat-->
        <div class="member m-2" id="con">
            <div class="name" id="mem">
                <h2>Rajat Bansal</h2>
                <ul>
                    <li><a href="#" target="_"><img src="images/fb.png" alt="" id="fb"></a></li>
                    <li><a href="https://www.instagram.com/rkbansal_/" target="_"><img src="images/insta.png" alt=""></a></li>
                    <li><a href="https://twitter.com/Rajat_Bansal_01" target="_"><img src="images/twitter.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!--Vaibhav-->
        <div class="member m-3" id="con">
            <div class="name" id="mem">
                <h2>Vaibhav Gandhi</h2>
                <ul>
                    <li><a href="https://m.facebook.com/vaibhav.gandhi.900" target="_"><img src="images/fb.png" alt="" id="fb"></a></li>
                    <li><a href="https://www.instagram.com/gandhi_ka_chashma/" target="_"><img src="images/insta.png" alt=""></a></li>
                    <li><a href="https://twitter.com/Vaibhav43122187" target="_"><img src="images/twitter.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
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
    <!--Ends-->
    
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

        var slideIndex = 0;
        showslides();

        function showslides()
        {
            var i;
            var slides = document.getElementsByClassName("slides")
            for (i=0; i<slides.length; i++)
            {
                slides[i].style.display="none";
            }
            slideIndex++;
            if(slideIndex > slides.length)
            {
                slideIndex = 1;
            }
            slides[slideIndex-1].style.display="block";
            setTimeout(showslides, 3300);
        }
    </script>
</body>

</html>