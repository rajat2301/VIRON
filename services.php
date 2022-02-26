<?php session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VIRON - Services</title>

	<link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/hf.css">
	<link rel="stylesheet" href="css/services.css">

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
						<a href="services.php"><li class="active">SERVICES</li></a>
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
			<h1>Check Our Services</h1>
		</div>
	</div>

	<!--Main Body-->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-location-pin"></i></span>
					<div class="desc">
						<h3>Accessible Location</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-alarm-clock"></i></span>
					<div class="desc">
						<h3>Open 24/7</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-calendar"></i></span>
					<div class="desc">
						<h3>Reservation</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-user"></i></span>
					<div class="desc">
						<h3>Friendly Staff</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-signal"></i></span>
					<div class="desc">
						<h3>Free Wifi</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services">
					<span><i class="ti-location-pin"></i></span>
					<div class="desc">
						<h3>Accessible Location</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>
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