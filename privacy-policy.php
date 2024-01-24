<!DOCTYPE html>
<html lang="en">
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
        <a class="logoName" href="./index.php"><img src="./images/ZEMPAA.png" class="logo" alt=""></a>
    
        <div>
          <ul id="navbar">
              <li><a class="active" href="index.php">Home</a></li>
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
                    <a class="culinaryd" href="./culinaryDelights.php">culinaryDelights</a>
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

    <section class="arrangeSection">
    <section>
        <h2> Introduction</h2>
        <p>Zempaa operates an e-commerce platform designed to facilitate online transactions for university-related products and merchandise. This policy outlines the terms and conditions governing the use of the Zempaa University E-Commerce platform.</p>
    </section>

    <section>
        <h2> User Accounts</h2>
        <p><strong>Registration Requirements:</strong> All users, including university staff, students, and external users, must register for an account to make purchases on the platform.</p>
        <p><strong>Account Security:</strong> Users are responsible for maintaining the security of their accounts, including the use of strong passwords and prompt reporting of any unauthorized access.</p>
    </section>

    <section>
        <h2> Product Listings and Descriptions</h2>
        <p><strong>Accurate Listings:</strong> Sellers must provide accurate and detailed information for each product listing.</p>
        <p><strong>University-Branded Merchandise:</strong> Only authorized university-branded merchandise is allowed for sale on the platform.</p>
    </section>

    <section>
        <h2> Payment and Transactions</h2>
        <p><strong>Accepted Payment Methods:</strong> Zempaa accepts various payment methods, including credit cards and digital wallets.</p>
        <p><strong>Transaction Security:</strong> Zempaa employs industry-standard security measures to protect online transactions.</p>
        <p><strong>Refund and Cancellation:</strong> Users can refer to the refund and cancellation policies outlined on the platform.</p>
    </section>

    <section>
        <h2> Privacy and Data Security</h2>
        <p><strong>Data Collection:</strong> Zempaa collects and uses user data for transactional purposes, ensuring compliance with data protection laws.</p>
        <p><strong>Security Measures:</strong> Zempaa implements robust security measures to safeguard sensitive user information.</p>
    </section>

    <section>
        <h2> Shipping and Delivery</h2>
        <p><strong>Shipping Methods:</strong> Users can choose from different shipping methods.</p>
        <p><strong>Delivery Times:</strong> Estimated delivery times are provided during the checkout process.</p>
        <p><strong>Shipping Costs:</strong> Shipping costs are communicated clearly during the transaction.</p>
    </section>

    <section>
        <h2> Returns and Exchanges</h2>
        <p><strong>Procedures:</strong> Clear procedures are in place for users to initiate returns and exchanges.</p>
        <p><strong>Conditions:</strong> Items must meet specified conditions for acceptance of returns.</p>
    </section>

    <section>
        <h2> Customer Support</h2>
        <p><strong>Contact Information:</strong> Users can contact Zempaa's customer support for assistance.</p>
        <p><strong>Response Times:</strong> Zempaa aims to respond to customer inquiries within a reasonable timeframe.</p>
    </section>

    <section>
        <h2> Prohibited Activities</h2>
        <p><strong>List of Prohibited Activities:</strong> Users are prohibited from engaging in activities such as fraud, misrepresentation, or any illegal activities.</p>
        <p><strong>Consequences:</strong> Violations may result in the suspension or termination of user accounts.</p>
    </section>

    <section>
        <h2> Intellectual Property</h2>
        <p><strong>Respect for Intellectual Property:</strong> Sellers must respect intellectual property rights, and Zempaa will address any reported infringement promptly.</p>
        <p><strong>Sale of Digital Content:</strong> Guidelines are provided for the sale of digital content, ensuring compliance with copyright laws.</p>
    </section>

    <section>
        <h2>Accessibility</h2>
        <p><strong>Accessibility Standards:</strong> Zempaa is committed to ensuring the platform is accessible to users with disabilities, following relevant accessibility standards.</p>
    </section>

    <section>
        <h2>Marketing and Promotions</h2>
        <p><strong>Marketing Guidelines:</strong> Sellers must adhere to guidelines when marketing products on the platform.</p>
        <p><strong>Promotional Campaigns:</strong> Approval processes are in place for promotional campaigns.</p>
    </section>

    <section>
        <h2>Legal Compliance</h2>
        <p><strong>Local, State, and Federal Laws:</strong> Zempaa complies with local, state, and federal laws governing e-commerce transactions.</p>
        <p><strong>International Trade:</strong> Users engaging in international transactions must comply with international trade regulations.</p>
    </section>

    <section>
        <h2>Changes to the Policy</h2>
        <p><strong>Policy Updates:</strong> Zempaa reserves the right to update this policy, and users will be notified of any changes.</p>
        <p><strong>User Agreement:</strong> Continued use of the platform implies user agreement with the updated policy.</p>
    </section>

    <section>
        <h2>Acknowledgment</h2>
        <p><strong>User Acknowledgment:</strong> By using the Zempaa University E-Commerce platform, users acknowledge having read and understood this policy.</p>
        <p><strong>Agreement:</strong> Users agree to abide by the terms outlined in this policy.</p>
    </section>

    <section>
        <h2>Contact Information</h2>
        <p class="contact-info">For inquiries and support, users can contact Zempaa at <a class="emailMessage" href="mailto:support@zempaastores.com">support@zempaastores.com</a>.</p>
    </section>


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

    <!-- <p>&copy; 2024 Zempaa University. All rights reserved.</p> -->

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