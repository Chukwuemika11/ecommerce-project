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
                  <a class="active" href="categories.php">Categories</a>
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
    <section class="randomImages">
       <img class="cartegory-image" src="./images/categoriesmenshopping.jpg">

        <div class="text-content">
           
            <p class="p-text-content">Welcome to Zempaa, your destination.
            🚀 for a seamless shopping experience.
             Explore our curated categories to discover a world of products designed to meet your needs and preferences. From the latest trends to timeless classics,
            we have something for everyone.
            Happy Shopping!
            Zempaa Team 🌟
            </p>
            <p class="p-text-content">Join the Zempaa community today and elevate your shopping experience. Embrace the future of online retail with us!
        </div>
        </section>
        <h1 class="center">shoes</h1>
            <section class="categories">

                <div class="first-category">
               <a href="./shoes.php"> <div class="circular-image">
                  <img src="./images/shoe1.jpg" alt="Circular Image">
              </div>
            </a>

            <a href="./shoes.php"> <div class="circular-image">
                <img src="./images/shoe11.jpg" alt="Circular Image">
            </div>
          </a>

          <a href="./shoes.php"> <div class="circular-image">
            <img src="./images/shoe9.jpg" alt="Circular Image">
        </div>
      </a>

      <a href="./shoes.php"> <div class="circular-image">
        <img src="./images/shoe2.jpg" alt="Circular Image">
    </div>
  </a>

            </div>
            </section>

            <h1 class="center">clothes</h1>

            <section class="categories">

                <div class="second-category">
                    <a href="./clothes.php"> <div class="circular-image">
                        <img src="./img/shirt 7.jpg" alt="Circular Image">
                    </div>
                  </a>

                  <a href="./clothes.php"> <div class="circular-image">
                    <img src="./img/shirt 2.jpeg" alt="Circular Image">
                </div>
              </a>

              <a href="./clothes.php"> <div class="circular-image">
                <img src="./img/shirt 15.jpg" alt="Circular Image">
            </div>
          </a>

          <a href="./clothes.php"> <div class="circular-image">
            <img src="./img/shirt 9.jpeg" alt="Circular Image">
        </div>
      </a>
            
            </div>
            </section>
            
            <h1 class="center">jewelries</h1>

            <section class="categories">

                <div class="first-category">
                    <a href="./jewelries.php"> <div class="circular-image">
                        <img src="./images/jewelry10.jpg" alt="Circular Image">
                    </div>
                  </a>

                  <a href="./jewelries.php"> <div class="circular-image">
                    <img src="./images/jewelry9.jpg" alt="Circular Image">
                </div>
              </a>

              <a href="./jewelries.php"> <div class="circular-image">
                <img src="./images/jewelry10.jpg" alt="Circular Image">
            </div>
          </a>

          <a href="./jewelries.php"> <div class="circular-image">
            <img src="./images/jewelry12.jpg" alt="Circular Image">
        </div>
      </a>

            
            </div>
            </section>

            <h1 class="center">food</h1>

            <section class="categories">

                <div class="first-category">
                    <a href="./food.php"><div class="circular-image">
                        <img src="./images/food1.jpg" alt="Circular Image">
                    </div>
                </a>

                <a href="./food.php"><div class="circular-image">
                    <img src="./images/food10.jpg" alt="Circular Image">
                </div>
            </a>

               <a href="./food.php"><div class="circular-image">
                <img src="./images/food8.jpg" alt="Circular Image">
            </div>
        </a>

        <a href="./food.php"><div class="circular-image">
            <img src="./images/food5.jpg" alt="Circular Image">
        </div>
    </a>
            
            </div>
            </section>

            <h1 class="center">culinary-delights</h1>

            <section class="categories">

                <div class="first-category">
               <a href="./culinaryDelights.php"> <div class="circular-image">
                  <img src="./images/culiniary1.jpg" alt="Circular Image">
              </div>
            </a>

            <a href="./culinaryDelights.php"> <div class="circular-image">
                <img src="./images/culiniary7.jpg" alt="Circular Image">
            </div>
          </a>

          <a href="./culinaryDelights.php"> <div class="circular-image">
            <img src="./images/culiniary8.jpg" alt="Circular Image">
        </div>
      </a>

      <a href="./culinaryDelights.php"> <div class="circular-image">
        <img src="./images/culiniary4.jpg" alt="Circular Image">
    </div>
  </a>
            
            </div>
            </section>

            <h1 class="center">sport-wears</h1>

            <section class="categories">

                <div class="first-category">
                <a href="./sportWears.php"><div class="circular-image">
                  <img src="./images/jersey10.jpg" alt="Circular Image">
              </div>
              </a>

              <a href="./sportWears.php"><div class="circular-image">
                <img src="./images/jersey3.jpg" alt="Circular Image">
            </div>
            </a>

            <a href="./sportWears.php"><div class="circular-image">
                <img src="./images/jersey5.jpg" alt="Circular Image">
            </div>
            </a>

            <a href="./sportWears.php"><div class="circular-image">
                <img src="./images/jersey1.jpg" alt="Circular Image">
            </div>
            </a>

            
            </div>
            </section>
            
            <h1 class="center">drinks and water</h1>

            <section class="categories">

                <div class="first-category">
               <a href="./drinksAndWater.php"> <div class="circular-image">
                    <img src="./images/drinks4.jpg" alt="Circular Image">
                </div>
            </a>

            <a href="./drinksAndWater.php"> <div class="circular-image">
                <img src="./images/drinks6.jpg" alt="Circular Image">
            </div>
        </a>

        <a href="./drinksAndWater.php"> <div class="circular-image">
            <img src="./images/drinks10.jpg" alt="Circular Image">
        </div>
    </a>

    <a href="./drinksAndWater.php"> <div class="circular-image">
        <img src="./images/drinks9.jpg" alt="Circular Image">
    </div>
</a>
            
            </div>
            </section>

            <h1 class="center">others</h1>

            <section class="categories">

                <div class="first-category">
              <a href="./others.php"> <div class="circular-image">
                  <img src="./images/others2.jpg" alt="Circular Image">
              </div>
              </a>

              <a href="./others.php"> <div class="circular-image">
                <img src="./images/others3.jpg" alt="Circular Image">
            </div>
            </a>

            <a href="./others.php"> <div class="circular-image">
                <img src="./images/others4.jpg" alt="Circular Image">
            </div>
            </a>

            <a href="./others.php"> <div class="circular-image">
                <img src="./images/others1.jpg" alt="Circular Image">
            </div>
            </a>

            
            </div>
            </section>

            <h1 class="center">new-arrivals</h1>

            <section class="categories">

                <div class="first-category">
                <a href="../newArrivals.php
"><div class="circular-image">
                    <img src="./images/newarrivals2.jpg" alt="Circular Image">
                </div>
                </a>
                <a href="../newArrivals.php
"><div class="circular-image">
                    <img src="./images/newarrivals5.jpg" alt="Circular Image">
                </div>
                </a>

                <a href="../newArrivals.php
"><div class="circular-image">
                    <img src="./images/newarrivals1.jpg" alt="Circular Image">
                </div>
                </a>

                <a href="../newArrivals.php
"><div class="circular-image">
                    <img src="./images/newarrivals9.jpg" alt="Circular Image">
                </div>
                </a>

            </div>
            </section>

            <h1 class="center">coming-soon</h1>

            <section class="categories">

                <div class="first-category">
               <a class="" href="./comingSoon.php"> <div class="circular-image">
                  <img src="./images/comingsoon17.jpg" alt="Circular Image">
              </div>
            </a>

            <a class="" href="./comingSoon.php"> <div class="circular-image">
                <img src="./images/comingsoon9.jpg" alt="Circular Image">
            </div>
          </a>

          <a class="" href="./comingSoon.php"> <div class="circular-image">
            <img src="./images/comingsoon1.jpg" alt="Circular Image">
        </div>
      </a>

      <a class="" href="./comingSoon.php"> <div class="circular-image">
        <img src="./images/comingsoon7.jpg" alt="Circular Image">
    </div>
  </a>

    </section>
            
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
  <script src="script.js"></script>
        </body>
        </html>
        



        
        
 