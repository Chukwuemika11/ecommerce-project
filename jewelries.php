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
                    <a class="active" href="./jewelries.php">jewelries</a> 
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

                <li class="hiddenLink"><a href="Blog.php">Blog</a></li>
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
<body>

    <div class="shopShoe">
        <img class="jewelry-image" src="./images/jewelry11.jpg" alt=" a jewelry">
       <div>
      <h1 class="h1ShoeText">Adorn Yourself with Elegance</h1>
      <p class="shoeText">
    Discover timeless pieces that exude classic elegance. From dainty necklaces 
    to sophisticated bracelets, our collection is curated to add a touch of grace to your everyday look. 
    <!-- Adorn Yourself with Elegance
    Explore our exquisite collection of jewelry and elevate your style with timeless pieces. From delicate necklaces to statement earrings, discover the perfect accessory for any occasion.  -->
    <!-- Dive into the world of fine craftsmanship and add a touch of glamour to your ensemble. -->
      </p>
</div>
          </div>


    <div id="jewelry" class="category">
        <h2>Jewelries</h2>
        <div class="carousel-container">
            <div class="carousel-frame">
            <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
            
            <div class="product-container">
            <!-- Add more shoe product images as needed -->
           <div id="product1">
            <div class="pro">
                <img src="./images/jewelry1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry10.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry12.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

<!-- <div></div> -->
        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry9.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        <div id="product1">
            <div class="pro">
                <img src="./images/jewelry11.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-shirts</h5>
                   <h4>₦80</h4>
                </div>
                <button>Add To Cart</button>
            </div>
        </div>

        
        <!-- <button id="right-arrow" class="arrow right-arrow" onclick="moveCarousel('right')">❯</button> -->

        </div>
    </div>
    </div>
   </div> 


   <div id="jewelry" class="category">
    <h2>Jewelries</h2>
    <div class="carousel-container">
        <div class="carousel-frame">
        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
        
        <div class="product-container">
        <!-- Add more shoe product images as needed -->
       <div id="product1">
        <div class="pro">
            <img src="./images/jewelry1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry10.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry12.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

<!-- <div></div> -->
    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry9.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    <div id="product1">
        <div class="pro">
            <img src="./images/jewelry11.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirts</h5>
               <h4>₦80</h4>
            </div>
            <button>Add To Cart</button>
        </div>
    </div>

    
    <!-- <button id="right-arrow" class="arrow right-arrow" onclick="moveCarousel('right')">❯</button> -->

    </div>
</div>
</div>
</div> 

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