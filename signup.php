<?php
require 'config.php';
if(isset($_POST['submit_btn']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $name=$_POST['name'];
    if($password==$cpassword)
    {
        $query="select * from user WHERE name='$name'";
        $query_run=mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript"> alert("User already exists..Try another username")</script>';
        }
        else
        {
            $query="insert into user values('$username','$password','$name')";
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
                echo '<script type="text/javascript"> alert("User registerd")</script>';
            }
            else
            {
                echo '<script type="text/javascript"> alert("Error!!")</script>';
            }

            
        }
    }
    else
    {
      echo '<script type="text/javascript"> alert("Password and confirm password doesnot match");</script>';  
    }
}
?>
<html>
<head>
<title>signup Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">	
</head>
<body background="images/gallery-img5.jpg">
<section class="navbar">
<table>
<tr>
<td>
<span class="heading"><a href='#'><img src="images/logo1.jpg" alt="logo1" height="50px" width="50px"></a>
</td>t
<th><a href='#' style="color: orange;">BHUKKAD FOOD DELIVERY</a></th></span>
<th width="900px" style="text-align: right;"><a href='login.php'><span class="tag">Login</span></a>|<a href="#"><span class="tag">Signup</span></a></th>
</tr>
</table>
</section>
<form action="signup.php" method="post">
<center>
<div class="box">
        <h2>Signup</h2>
        <form>
            <div class="inputBox">
                <input type="email" name="username" required="Bhanu">
                <label>Email</label>
            </div>
            <div class="inputBox">
                <input type="text" name="name" required="Bhanu">
                <label>Name</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="cpassword" required="">
                <label>Confirm Password</label>
            </div>
            <input type="submit" name="submit_btn" value="Signup"><br><br>
        </form>
</div>
<!--<div class="right-box">
	<span class="signinwith">Sign in with<br/>Social Network</span>
	<button onclick="window.location.href='address.php'" class="social google" >Log in with Google++</button>
	<button onclick="window.location.href='address.php'" class="social facebook">Log in with Facebook</button>
	<button onclick="window.location.href='address.php'" class="social twitter">Log in with Twitter</button>
</div>
<div class="or">OR</div>-->
</center>
<div class="footer-main-div">
    <div class="footer-social-icons">
        <ul>
            <li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-google-plus"></i></a></li>
            <li><a href="#" target="blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
<div class="footer-menu-one">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>
<div class="footer-menu-two">
    <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Media</a></li>
    </ul>
</div>
</div>
<!--<div class="footer-bottom">
    <p>Design by:<a href="#">Team Bhukkad</a></p>
</div>-->
</body>
</html>