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
                    <a class="newArr" href="./newArrivals.php
">newArrivals</a>
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
              <li><a class="active" href="Contact.php">Contact</a></li>
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
   
    <section class="contact-page">
    <!-- <h1>Contact Us</h1>

    <p>Have questions or feedback? We'd love to hear from you! Contact our customer support team at <a href="mailto:izunduchukwuemika9@gmail.com">izunduchukwuemika9@gmail.com</a> or call us at <strong>+2348140922048</strong>.</p> -->

    <!-- <form action="process_contact.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
    </form> -->

</section>

<section id="page-header" class="contact-header">
            
    <h2> #let's_talk </h2>

    <p>LEAVE A MESSAGE, We love to hear from you</p>
    
    
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations
             or contact us today</h2>
        <h3>Head office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>56 Glassford Street Glassgow G1 1UL New York</p>
            </li>
          <br>
            <li>
                <i class="far fa-envelope"></i>
                <p>56 Glassford Street Glassgow G1 1UL New York</p>
            </li>
            <br>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>56 Glassford Street Glassgow G1 1UL New York</p>
            </li>
            <br>
            <li>
                <i class="far fa-clock"></i>
                <p>56 Glassford Street Glassgow G1 1UL New York</p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.419190425059!2d7.526384599999999!3d6.468463799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a4778dfa3625%3A0x173ca8d9682fbf38!2sGodfrey%20Okoye%20University!5e0!3m2!1sen!2sng!4v1703855165399!5m2!1sen!2sng"
         width="600" height="450" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
    <form id="contactForm" method="post" action="process_contact.php">
        <span class="colorDark">LEAVE A MESSAGE</span>
        <h2 class="colorDark">We love to hear from you</h2>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
        <textarea id="message" name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <button type="button" class="normal" onclick="submitForm()">Submit</button>
    </form>

    <div class="people">
        <div>
           <img src="images/chrismember.jpg" alt="">
            <p><span class="spanFormDetails">Obi Christopher</span> CEO <br> Phone:+2348034858899
            <br> E-mail: contact@example.com</p>
        </div>
        <div>
            <img src="images/member5.jpg" alt="">
            <p><span class="spanFormDetails">Izundu Chukwuemika</span> CEO <br> Phone:+2348067020765
            <br> E-mail: contact@example.com</p>
        </div>
        <div>
            <img src="images/member.jpg" alt="">
            <p><span class="spanFormDetails">Damian Paschal</span>CEO <br> Phone:+2348140922048
            <br> E-mail: contact@example.com</p>
        </div>
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