<?php session_start();
?>
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VIRON - Contact Us</title>
	
	<link rel="stylesheet" href="css/hf.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/themify-icons.css">

</head>
<body>
 
	<!--Header-->
	<div class="bg">
		<header>
			<div class="head">
                <a href="home.php"><h3 id="logo"><span>V</span>I<span>R</span>O<span>N</span></h3></a>
				<div class="main-menu">
					<ul>
						<a href="home.php"><li>HOME</li></a>
						<a href="facilities.php"><li>FACILITIES</li></a>
						<a href="services.php"><li>SERVICES</li></a>
						<a href="blog.php"><li>BLOG</li></a>
						<a href="contact.php"><li class="active">CONTACT US</li></a>
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
		<div class="contact-title">
            <h1>GET<span>IN</span>TOUCH</h1>
        </div>
    </div>

	<div class="contact-section">
		<div class="row">
			<div class="col">
				<div class="gmap_canvas">
					<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=horizon%201050%20East%20Palm%20Canyon%20Dr.%20Palm%20Springs,%20California&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>	
			</div>
			<div class="col">
				<div class="col-2">
					<h3>Our Address</h3>
					<ul class="contact-info">
						<li><i class="ti-map"></i>1050 E Palm Canyon Dr, Palm Springs, CA 92264, United States</li>
						<li><i class="ti-mobile"></i>+ 1235 2355 98</li>
						<li><i class="ti-home"></i><a href="home.php">www.resortviron.com</a></li>
					</ul>
				</div>
				<div class="col-2">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
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
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/custom.js"></script>
	<script>
        window.addEventListener('scroll',function(){
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 350;
            header.classList.toggle('scrolling-active',windowPosition);
        })
    </script>
</body>
</html>