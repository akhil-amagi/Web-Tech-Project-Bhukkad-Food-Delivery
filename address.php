<?php
 session_start();
?>
<html>
<head>
<title>Address Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body background="images/gallery-img5.jpg">
<section class="navbar">
<table>
<tr>
<td>
<a href='#'><img src="images/logo1.jpg" alt="logo1" height="50px" width="50px"></a>
</td>
<th><a href='#' style="color: orange;">BHUKKAD FOOD DELIVERY</a></th>
<th width="900px" style="text-align: right;"><span style="color: white;">Welcome <?php echo $_SESSION['name'] ?></span><a href="thankyou.php"><span class="tag">Logout</a></span></th>
</tr>
</table>
</section>
<br>
<br>
<center>
<p></p>
<section class="login">
<table style="padding: 200px;">
<form>	
<th>
<center>
<div class="box" style="transform: translate(-50%,-50%);">
<h2>Address</h2>
<div class="inputBox">
                <input type="text" id="uname" name="Address" required="" >
                <label>Set Address</label>
</div>
<b style="color: white;">Set As:</b><span class="dropdown">
<select name="dropdown">
	<option value="Home">HOME</option>
	<option vlaue="Office">OFFICE</option>
</select>
</span >
<br><br><a href='restrauntnames.php'><span class="tag">Save</span></a><br><br><br></center>
</th>
</div>
</form>
</table>
</center>
</section>
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

</body>
</html>