<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <link rel="stylesheet" type="text/css" href="raj.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <script type="text/javascript" src="raja.js"></script>
</head>
<body style="background: white;">
<section class="navbar">
<table>
<tr>
<td>
<a href='#'><img src="images/logo1.jpg" alt="logo1" height="50px" width="50px"></a>
</td>
<th><a href='#' style="color: orange;">BHUKKAD FOOD DELIVERY</a></th>
<th width="900px" style="text-align: right;"><a href="thankyou.php"><span class="tag">Logout</a></span></th>
</tr>
</table>
</section>
<div class="wrap cf">
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="restrauntnames.php" class="continue">Continue Shopping</a>
  </div>
  <div class="cart">

    <ul class="cartWrap">
      <li class="items odd">
        
    <div class="infoWrap"> 
        <div class="cartSection">
        <img src="images/v biryani.jpg" alt="" class="itemImg" />
          <h3>Veg Biryani</h3>
        
           <p> <input onblur="a()" onmouseleave="e()" id="item1_" type="text"  class="qty" placeholder="1"/> x 300.00/-</p>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p id="item1">300.00/-</p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
      </div>
      </li>
      <li class="items even">
        
       <div class="infoWrap"> 
        <div class="cartSection">
         
        <img src="images/c fried.jpg" alt="" class="itemImg" />
          <h3>Chicken Fried Rice</h3>
        
           <p> <input onblur="b()" onmouseleave="e()" type="text" id="item2_" class="qty" placeholder="1"/> x 200.00/-</p>
        
          <p class="stockStatus"> In Stock</p>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p id="item2">200.00/-</p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
      </div>
      </li>

      
            <li class="items odd">
             <div class="infoWrap"> 
        <div class="cartSection">
            
        <img src="images/pbm.jpg" alt="" class="itemImg" />
          <h3>Panner Butter Masala</h3>
        
           <p> <input onblur="c()" onmouseleave="e()" id="item3_" type="text"  class="qty" placeholder="1"/> x 130.00/-</p>
        <p class="stockStatus"> In Stock</p>

          
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p id="item3">130.00/-</p>
        </div>
                    <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
              </div>
      </li>
      <li class="items even">
       <div class="infoWrap"> 
        <div class="cartSection info">
             
        <img src="images/naan.jpg" alt="" class="itemImg" />
          <h3>Butter Naan</h3>
        
          <p> <input onblur="d()" onmouseleave="e()"  id="item4_" type="text"  class="qty" placeholder="1"/> x 35.00/-</p>
        
          <p class="stockStatus"> In Stock</p>
          
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p id="item4">35.00/-</p>
        </div>
    
            <div class="cartSection removeWrap">
           <a href="#" class="remove">x</a>
        </div>
         </div>
         <div class="special"><div class="specialContent">Free gift with purchase!</div></div>
      </li>
      
      
      <!--<li class="items even">Item 2</li>-->
 
    </ul>
  </div>
  
  <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="btn"></a></div>
  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value" ><p id="subtotal">35.00/-</p></span></li>
      
          <li class="totalRow"><span class="label">Shipping</span><span class="value">5.00/-</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value">4.00/-</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value"><p id="total">44.00/-</p></span></li>
      <li class="totalRow"><a href="thankyou.php" class="btn continue">Checkout</a></li>
    </ul>
  </div>
</div>
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
