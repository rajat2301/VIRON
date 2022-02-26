<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VIRON - login</title>
    <link rel="stylesheet" href="css/hf.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <script>
        function validate()
        {
            var name=document.ContactForm.username.value;
		    var pw=document.ContactForm.pw.value;
			var cpw=document.ContactForm.pw.value;
		    if (name.length=="")
		    {
                window.alert("Please enter the username!");
    			return false;
            }
            if(pw.length=="")
            {
                window.alert("Please enter the password!");
                return false;
            }
			if(cpw.length=="")
            {
                window.alert("Please enter the password!");
                return false;
            }
        }
        
    </script>
	
    
    <div>
        <header>
            <div class="head">
                <a href="index.php"><h3 id="logo"><span>V</span>I<span>R</span>O<span>N</span></h3></a>
                <div class="main-menu">
                    <ul>
                        <a href="index.php"><li>HOME</li></a>
                        <a href="facilities.php"><li>FACILITIES</li></a>
                        <a href="services.php"><li>SERVICES</li></a>
                        <a href="blog.php"><li>BLOG</li></a>
                        <a href="contact.php"><li>CONTACT US</li></a>
                        <a href="login.php"><li class="active">Login/Register</li></a>
                    </ul>
                </div>
            </div>
        </header>
    </div>

    <div class="main">
        <h1 class="title">WELCOME TO VIRON</h1>

        <!--Successful Registration-->
        <?php if(isset($_SESSION['suc-msg']) && !empty($_SESSION['suc-msg'])) { ?>
            <div class="suc-msg">
                <?php echo $_SESSION['suc-msg']; ?>
            </div>
            <?php
            unset($_SESSION['suc-msg']);
        }?>

        <!--incorrect password-->
        <?php if(isset($_SESSION['fail-msg']) && !empty($_SESSION['fail-msg'])) { ?>
            <div class="fail-msg">
                <?php echo $_SESSION['fail-msg']; ?>
            </div>
            <?php
            unset($_SESSION['fail-msg']);
        }?>


        <form action="signin.php" name="ContactForm" method="post" id="frm" onSubmit="return validate();" >
            <h1>Log In</h1>
                <input type="text" name="name" size=20 placeholder="Enter Username*" onfocus='this.placeholder=""' onblur='this.placeholder="Enter Username*"' required>
                <input type="password" name="pw" size=20 placeholder="Enter Password*" onfocus='this.placeholder=""' onblur='this.placeholder="Enter password*"' required><br>
                <input class="button" type="submit" name="sbmtbtn" value="Log In">
                <div>
                    <p><i>Not yet registered?</i></p>&nbsp;&nbsp;<a href="register.php">Register</a>
                </div>
        </form>
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
</body>
</html>
