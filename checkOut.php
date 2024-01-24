<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zempaa shopping mall</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:ital,wght@0,700;1,300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&family=Hanken+Grotesk:wght@500;700;800&family=Inter:wght@400;700&family=Josefin+Sans:wght@300;400;600&family=League+Spartan:wght@400;500;700&family=Overpass:wght@400;700&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section id="header">
        <a class="logoName" href="./index.html"><img src="./images/ZEMPAA.png" class="logo" alt=""></a>
    
        <div>
          <ul id="navbar">
              <li><a class="active" href="index.html">Home</a></li>
              <li><a href="shop.html" onclick="goToShop()">Shop</a></li>
              <li class="">
                  <a href="categories.html">Categories</a>
                  <!-- for the arrow &#x21d3; incase -->
              </li> 
              <div class="sub-categories">
                <div>
                    <a href="./shoes.html">Shoes</a>
                    <a href="./clothes.html">Clothes</a>
                    <a href="./jewelries.html">jewelries</a> 
                </div>
                <div>
                    <a href="./food.html">food</a>
                    <a href="./sportWears.html">sportWears</a>
                    <a class="culinaryd" href="./culinaryDelights.html">culinaryDelights</a>
                    <a href="./comingSoon.html">comingSoon</a>
                 
                </div>
                <div>
                    <a class="drinkwa" href="./drinksAndWater.html">drinks and water</a>
                    <a href="./others.html">others</a>
                    <a class="newArr" href="./newArrivals.html">newArrivals</a>
                </div>
                    <!-- <div class="block"> -->
                    <!-- </div> -->
                </div>
                </li>  

                <li class="hiddenLink"><a href="Blog.html">Blog</a></li>
                <li class="hiddenLink"><a href="About.html">AboutUs</a></li>
                <li class="hiddenLink"><a href="Contact.html">Contact</a></li>
                <li class="hiddenLink"><a href="checkOut.html">CheckOut</a></li>
                <li class="hiddenLink"><a href="MyAccount.html">MyAccount</a></li>
                <div class="flex-slider">
                <!-- <li id="lg-bag"><a href="Cart.html" onclick="goToCart()"><i class="far fa-shopping-bag"></i></a>cart</li> -->
                <a class="cartLink shiftDown" href="./cart.html" onclick="goToPage('cart')">Cart <span id="cartCountDesktop">0</span></a>
                    <p class="dark-mode movedarkmode">Darkmode</p>
                    <div class="toggle changeToggleColor">
                      <span class="round"></span>
                  </div>
                 </div>                
                <div id="down">
                  <div class="firstSide">
               <li><a href="Blog.html">Blog</a></li>
              <li><a href="About.html">AboutUs</a></li>
              <li><a href="Contact.html">Contact</a></li>
               </div>
               <div class="secondSide">
              <li><a class="active" href="checkOut.html">CheckOut</a></li>
              <li><a href="MyAccount.html">MyAccount</a></li>
              <!-- <li id="lg-bag"><a href="Cart.html" onclick="goToCart()"><i class="far fa-shopping-bag"></i></a>cart</li> -->
              <!-- <a class="shiftDown" href="./cart.html" onclick="goToPage('cart')">Cart <span id="cartCount">0</span></a> -->
               </div>
               <div>
              <a href="#" id="close"><i class="far fa-times"></i></a>
                              
            </div>
          </div>
            </ul>
            
         </div>
        <div id="mobile">
       <a href="./myAccount.html"><i class="fas fa-user"></i></a>
        <a class="shiftDown" href="./cart.html" onclick="goToPage('cart')">Cart <span id="cartCountMobile">0</span></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>

    </section>
    
 <!-- footer -->
 <footer>
    <div class="footer-section contact-info">
        <h3>Contact Us</h3>
        <p>Thinkers Corner Enugu State.</p>
        <p>Phone: +2348140922048</p>
        <p>Email: zempaastores.ng@gmail.com</p>
    </div>

    <div class="footer-section quick-links">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="/index.html">Home</a></li>
            <li><a href="./shop.html">Shop</a></li>
            <li><a href="./categories.html">Categories</a></li>
            <li><a href="./Blog.html">blog</a></li>
            <li><a href="./About.html">about us</a></li>
            <li><a href="./Contact.html">contact Us</a></li>
            <li><a href="./checkOut.html">checkOut</a></li>
            <li><a href="MyAccount.html">my Account</a></li>
        </ul>
    </div>

    <div class="footer-section social-media">
        <h3>Follow Us</h3>
        <div class="icon">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://web.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        
        <!-- Add social media icons or links here -->
    </div>

    <div class="footer-section legal">
        <h3>Legal</h3>
        <ul>
            <li><a href="./privacy-policy.html">Privacy Policy</a></li>
            <li><a href="./terms-of-service.html">Terms of Service</a></li>
        </ul>
    </div>

 <!-- Scroll to Top Arrow -->
<!-- <div id="scrollToTopContainer">
    <div id="scrollToTopBtn" onclick="scrollToTop">
    &#9650;
    </div>
</div> -->
<div id="scrollToTopContainer" onclick="scrollToTop()">
    <span id="scrollToTopBtn">&#9650;</span>
  </div>
</footer>
<script src="./script.js"></script>
</body>
</html>
