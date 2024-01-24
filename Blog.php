<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zempaa shopping mall</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&family=Hanken+Grotesk:wght@500;700;800&family=Inter:wght@400;700&family=Josefin+Sans:wght@300;400;600&family=League+Spartan:wght@400;500;700&family=Overpass:wght@400;700&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section id="header">
        <a class="logoName" href="./index.php"><img src="./images/ZEMPAA.png" class="logo" alt=""></a>
    
        <div>
          <ul id="navbar">
              <li><a href="index.php">Home</a></li>
              <li><a href="shop.php" onclick="goToShop()">Shop</a></li>
              <li class="">
                  <a href="categories.php">Categories</a>
                  <!-- for the arrow &#x21d3; incase -->
              </li> 
              <div class="sub-categories">
                <div>
                    <a href="./shoes.php">Shoes</a>
                    <a href="./clothes.php">Clothes</a>
                    <a href="./jewelries.php">jewelries</a> 
                </div>
                <div>
                    <a href="./food.php">food</a>
                    <a href="./sportWears.php">sportWears</a>
                    <a class="culinaryd" href="./culinaryDelights.php">culiniaryDelights</a>
                    <a href="./comingSoon.php">comingSoon</a>
                 
                </div>
                <div>
                    <a class="drinkwa" href="./drinksAndWater.php">drinks and water</a>
                    <a href="./others.php">others</a>
                    <a class="newArr" href="./newArrivals.php">newArrivals</a>
                </div>
                    <!-- <div class="block"> -->
                    <!-- </div> -->
                </div>
                </li>  

                <li class="hiddenLink"><a class="active" href="Blog.php">Blog</a></li>
                <li class="hiddenLink"><a href="About.php">AboutUs</a></li>
                <li class="hiddenLink"><a href="Contact.php">Contact</a></li>
                <li class="hiddenLink"><a href="Checkout.php">CheckOut</a></li>
                <li class="hiddenLink"><a href="MyAccount.php">MyAccount</a></li>
                <div class="flex-slider">
                <!-- <li id="lg-bag"><a href="Cart.php" onclick="goToCart()"><i class="far fa-shopping-bag"></i></a>cart</li> -->
                <a class="cartLink shiftDown" href="./cart.php" onclick="goToPage('cart')">Cart <span id="cartCountDesktop">0</span></a>
                    <p class="dark-mode movedarkmode">Darkmode</p>
                    <div class="toggle changeToggleColor">
                      <span class="round"></span>
                  </div>
                 </div>                
                <div id="down">
                  <div class="firstSide">
               <li><a href="Blog.php">Blog</a></li>
              <li><a href="About.php">AboutUs</a></li>
              <li><a href="Contact.php">Contact</a></li>
               </div>
               <div class="secondSide">
              <li><a href="Checkout.php">CheckOut</a></li>
              <li><a href="MyAccount.php">MyAccount</a></li>
              <!-- <li id="lg-bag"><a href="Cart.php" onclick="goToCart()"><i class="far fa-shopping-bag"></i></a>cart</li> -->
              <!-- <a class="shiftDown" href="./cart.php" onclick="goToPage('cart')">Cart <span id="cartCount">0</span></a> -->
               </div>
               <div>
              <a href="#" id="close"><i class="far fa-times"></i></a>
                              
            </div>
          </div>
            </ul>
            
         </div>
         <div id="mobile">
       <a href="./MyAccount.php"><i class="fas fa-user"></i></a>
        <a class="shiftDown" href="./cart.php" onclick="goToPage('cart')">Cart <span id="cartCountMobile">0</span></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>

    </section>
    <section class="randomImages">
        <div class="slideshow-container">
            <!-- Replace these image URLs with your actual image URLs -->
            <div class="mySlides">
                <img src="./images/randomimage1.jpg" alt="Slide 1">
            </div>    
             <div class="mySlides">
                <img src="./images/randomimage2.jpg" alt="Slide 2">
            </div>
             <div class="mySlides">
                <img src="./images/randomimage3.jpg" alt="Slide 3">
            </div> 
             <div class="mySlides">
                <img src="./images/randomimage7.jpg" alt="Slide 4">
            </div>
            <div class="mySlides">
                <img src="./images/randomimage5.jpg" alt="Slide 5">
            </div>
            <!-- <div class="mySlides">
                <img src="./images/randomimage4.jpg" alt="Slide 6">
            </div> -->
            <!-- <div class="mySlides">
                <img src="./images/randomimage5.jpg" alt="Slide 5">
            </div> -->
        </div>

        <div class="text-content">
            <h1>Welcome to Zempaa's Lifestyle Inspiration</h1>
            <p>Zempaa isn't just about what you wear – it's a lifestyle. Dive into articles that explore the intersection of fashion, culture, food and technology. Discover how to incorporate style into every aspect of your life, from home decor to travel.
             
                <span class="read-more">Continue reading...</span>
                <span class="hidden-text"> Join the Zempaa community today and elevate your shopping experience. Embrace the future of online retail with us!
                    </span>
            </p>
            
            <!-- <p class="p-text-content">Join the Zempaa community today and elevate your shopping experience. Embrace the future of online retail with us!</p> -->
        </div>
        </section>

    <section class="blogPages">
        <!-- <div class="blogPages1"> -->
            <div class="blogPagess">
                <!-- <div class="blog-cart"> -->
 <a href="./clothesBlog.php"><button class="btn">fashion</button></a>
 <a href="./culinaryDelightsBlog.php"><button class="btn">culinaryDelights </button></a>
 <a href="./refreshmentsBlog.php"><button class="btn">refreshments</button></a>
 <a href="./foodBlog.php"><button class="btn">food</button></a>
 <!-- </div> -->
 <!-- <div class="blogPages1"> -->
    <a href="./jewelriesBlog.php"><button class="btn">jewelries</button></a>
    <a href="./newArrivalsBlog.php"><button class="btn">newArrivals</button></a>
    <a href="./comingSoonBlog.php"><button class="btn">coming soon</button></a>
    <!-- <a href="./othersBlog.php"><button class="btn">others</button></a> -->
    <!-- </div> -->

    <!-- <div class="blogPages1"> -->
        <a href="./shoesBlog.php"><button class="btn">shoes</button></a>
        <a href="./fitnssBlog.php"><button class="btn">fitness</button></a>
        <!-- </div> -->
    </div>
        <div class="blogImage">
            <img class="round" src="./images/blogimage1.jpg" alt="">
            <div class="blogMainText">
                  <h1>Welcome to Zempaa shopping Blog</h1>
            <p>
                Stay Updated on the Latest Trends, Tips, and Deals
                At Zempaa, we're more than just an online marketplace – we're 
                a community passionate about style, innovation, and smart shopping.
                <span class="read-more">Continue reading...</span>
                <span class="hidden-text"> 
                Dive into our blog
                 to discover the latest trends , get expert tips, and unlock exclusive deals.
                 Whether you're a fashionista, a tech enthusiast, or a savvy shopper, our blog 
                 has something for everyone.
                </span>
            </p>
         </div>
        </div>
    <!-- </div> -->

   
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
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="./categories.php">Categories</a></li>
                        <li><a href="./Blog.php">blog</a></li>
                        <li><a href="./About.php">about us</a></li>
                        <li><a href="./Contact.php">contact Us</a></li>
                        <li><a href="./checkOut.php">checkOut</a></li>
                        <li><a href="MyAccount.php">my Account</a></li>
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
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./terms-of-service.php">Terms of Service</a></li>
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