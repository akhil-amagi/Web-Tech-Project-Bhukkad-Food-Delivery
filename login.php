<?php
 session_start();
 require 'config.php';
 if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from user WHERE username='$username' AND password='$password'";
    $query_run=mysqli_query($con,$query);
    $count=0;
    while($row=mysqli_fetch_assoc($query_run))
    {
        if($row['password']==$password)
        {
            $count=$count+1;
        }
    }
    if($count===0)
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
    }
    else
    {
        $_SESSION['name']=$row['name'];
            header('location:address.php');
    }
}
?>
<html>
<head>
<title>login Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body background="images/gallery-img5.jpg">
    <div id="page">

<section class="navbar">
<table>
<tr>
<td>
<span class="heading"><a href='#'><img src="images/logo1.jpg" alt="logo1" height="50px" width="50px"></a>
</td>
<th><a href='#' style="color: orange;">BHUKKAD FOOD DELIVERY</a></th></span>
<th width="900px" style="text-align: right;"><a href='#'><span class="tag">Login</span></a>|<a href="signup.php"><span class="tag">Signup</span></a></th>
</tr>
</table>
</section>
<form action="login.php" method="post">
<br>
<br>
<center>
<div class="box" style="transform: translate(-50%,-10%);">
        <h2>Login</h2>
            <div class="inputBox">
                <input type="email" id="uname" name="username" required="@" >
                <label>Email</label>
            </div>
            <div class="inputBox">
                <input type="password" id="passwd" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" name="login" value="Login"><br><br>
</div>
<!--<div class="right-box">
    <span class="signinwith">Sign in with<br/>Social Network</span>
    <button type="submit" onclick="window.location.href='address.php'" class="social google" >Log in with Google++</button>
    <button type="submit" onclick="window.location.href='address.php'" class="social facebook">Log in with Facebook</button>
    <button type="submit" onclick="window.location.href='address.php'" class="social twitter">Log in with Twitter</button>
</div>
<div class="or">OR</div>-->
</center>
</form></td></tr></table></section>
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
</div>
</body>
</html>

