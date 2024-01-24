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
              <li><a class="active" href="shop.php" onclick="goToShop()">Shop</a></li>
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
        <div class="slideshow-container">
            <!-- Replace these image URLs with your actual image URLs -->
            <!-- <div class="mySlides">
                <img src="./images/randomimage1.jpg" alt="Slide 1">
            </div>     -->
             <div class="mySlides">
                <img src="./images/randomimage2.jpg" alt="Slide 2">
            </div>
             <div class="mySlides">
                <img src="./images/randomimage3.jpg" alt="Slide 3">
            </div> 
             <!-- <div class="mySlides">
                <img src="./images/randomimage7.jpg" alt="Slide 4">
            </div>
            <div class="mySlides">
                <img src="./images/randomimage5.jpg" alt="Slide 5">
            </div>
            <div class="mySlides">
                <img src="./images/randomimage4.jpg" alt="Slide 6">
            </div> -->
            <!-- <div class="mySlides">
                <img src="./images/randomimage5.jpg" alt="Slide 5">
            </div> -->
        </div>

        <div class="text-content">
           
            <p class="p-text-content">Remember, style is a reflection of your personality. Let Zempaa be your accomplice in making a statement without saying a word. 
            🚀 Start Shopping Now and Make Every Purchase an Experience!
            Thank you for choosing Zempaa. Your satisfaction is our priority.
            Happy Shopping!
            Zempaa Team 🌟
            </p>
            <span class="read-more">Continue reading...</span>
                <span class="hidden-text">
            <p class="p-text-content">Join the Zempaa community today and elevate your shopping experience. Embrace the future of online retail with us!</p>
           </span>
        </div>
        </section>
    
        <section class="featured-products">
        <h1>featured Products</h1>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Select from drop down..." readonly onclick="handleSearchClick()">
            <div id="categoryDropdown" class="dropdown-content" style="display: none;">
                <a href="#" data-target="shoes">Shoes</a>
                <a href="#" data-target="clothes">Clothes</a>
                <a href="#" data-target="jewelry">Jewelries</a>
                <a href="#" data-target="food">Food</a>
                <a href="#" data-target="sport-wears">Sport Wears</a>
                <a href="#" data-target="culinary-delights">Culinary Delights</a>
                <a href="#" data-target="drinks">Drinks and Water</a>
                <a href="#" data-target="others">Others</a>
                <a href="#" data-target="new-arrivals">New Arrivals</a>
                <a href="#" data-target="back-to-school-deals">Back To School Deals</a>
                <a href="#" data-target="coming-soon-page">Coming Soon</a>
            </div>
        </div>
    
        <div id="shoes" class="category">
            <h2>Shoes</h2>
            <div class="carousel-container">
                <div class="carousel-frame">
                <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                
                <div class="product-container">
                <!-- Add more shoe product images as needed -->
                <div id="product1">
                    <div class="pro">
                        <img src="./images/shoe1.jpg" alt="">
                        <div class="des">
                            <span>adidas</span>
                            <h5>Cartoon Astronaut T-shirts</h5>
                           <h4>₦80</h4>
                        </div>
                        <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe1.jpg')">Add To Cart</button>
                    </div>
                </div>
            

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe2.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-', 80, './images/shoe2.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe9.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe9.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe13.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe13.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe11.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe11.jpg')">Add To Cart</button>
                </div>
            </div>

<!-- <div></div> -->
            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe6.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe6.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe8.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe8.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe3.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe10.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe10.jpg')">Add To Cart</button>
                </div>
            </div>

            <div id="product1">
                <div class="pro">
                    <img src="./images/shoe5.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                       <h4>₦80</h4>
                    </div>
                    <button onclick="addToCart('Cartoon Astronaut T-shirts', 80, './images/shoe5.jpg')">Add To Cart</button>
                </div>
            </div>

            
            <!-- <button id="right-arrow" class="arrow right-arrow" onclick="moveCarousel('right')">❯</button> -->

            </div>
        </div>
        </div>
       </div> 
    
        <div id="clothes" class="category">
            <h2>fashion wears</h2>
            <div class="carousel-container">
                <div class="carousel-frame">
                <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                
                <div class="product-container">
                <!-- Add more shoe product images as needed -->
               <div id="product1">
                <div class="pro">
                    <img src="./img/arch 1.jpg" alt="">
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
                    <img src="./img/arch2.jpg" alt="">
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
                    <img src="./img/arch3.jpg" alt="">
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
                    <img src="./img/arch4.jpg" alt="">
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
                    <img src="./img/shirt 2.jpeg" alt="">
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
                    <img src="./img/shirt 12.jpeg" alt="">
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
                    <img src="./img/shirt 5.jpeg" alt="">
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
                    <img src="./img/shirt 7.jpg" alt="">
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
                    <img src="./img/shirt 9.jpeg" alt="">
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
                    <img src="./img/shirt 8.jpeg" alt="">
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
    
       <div id="food" class="category">
        <h2>food</h2>
        <div class="carousel-container">
            <div class="carousel-frame">
            <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
            
            <div class="product-container">
            <!-- Add more shoe product images as needed -->
           <div id="product1">
            <div class="pro">
                <img src="./images/food1.jpg" alt="">
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
                <img src="./images/food4.jpg" alt="">
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
                <img src="./images/food3.jpg" alt="">
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
                <img src="./images/food2.jpg" alt="">
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
                <img src="./images/food5.jpg" alt="">
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
                <img src="./images/food6.jpg" alt="">
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
                <img src="./images/food7.jpg" alt="">
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
                <img src="./images/food8.jpg" alt="">
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
                <img src="./images/food9.jpg" alt="">
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
                <img src="./images/food10.jpg" alt="">
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
    
        <div id="sport-wears" class="category">
        <h2>sport-wears</h2>
        <div class="carousel-container">
            <div class="carousel-frame">
            <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
            
            <div class="product-container">
            <!-- Add more shoe product images as needed -->
           <div id="product1">
            <div class="pro">
                <img src="./images/jersey1.jpg" alt="">
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
                <img src="./images/jersey3.jpg" alt="">
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
                <img src="./images/jersey5.jpg" alt="">
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
                <img src="./images/jersey2.jpg" alt="">
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
                <img src="./images/jersey6.jpg" alt="">
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
                <img src="./images/jersey7.jpg" alt="">
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
                <img src="./images/jersey8.jpg" alt="">
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
                <img src="./images/jersey9.jpg" alt="">
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
                <img src="./images/jersey11.jpg" alt="">
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
                <img src="./images/jersey12.jpg" alt="">
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

   <div id="culiniary-delights" class="category">
    <h2>culiniary delights</h2>
    <div class="carousel-container">
        <div class="carousel-frame">
        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
        
        <div class="product-container">
        <!-- Add more shoe product images as needed -->
       <div id="product1">
        <div class="pro">
            <img src="./images/culiniary1.jpg" alt="">
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
            <img src="./images/culiniary2.jpg" alt="">
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
            <img src="./images/culiniary3.jpg" alt="">
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
            <img src="./images/culiniary4.jpg" alt="">
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
            <img src="./images/culiniary5.jpg" alt="">
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
            <img src="./images/culiniary6.jpg" alt="">
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
            <img src="./images/culiniary7.jpg" alt="">
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
            <img src="./images/culiniary8.jpg" alt="">
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
            <img src="./images/culiniary9.jpg" alt="">
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
            <img src="./images/culiniary10.jpg" alt="">
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

<div id="drinks" class="category">
    <h2>drinks</h2>
    <div class="carousel-container">
        <div class="carousel-frame">
        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
        
        <div class="product-container">
        <!-- Add more shoe product images as needed -->
       <div id="product1">
        <div class="pro">
            <img src="./images/drinks1.jpg" alt="">
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
            <img src="./images/drinks2.jpg" alt="">
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
            <img src="./images/drinks3.jpg" alt="">
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
            <img src="./images/drinks4.jpg" alt="">
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
            <img src="./images/drinks5.jpg" alt="">
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
            <img src="./images/drinks6.jpg" alt="">
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
            <img src="./images/drinks7.jpg" alt="">
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
            <img src="./images/drinks8.jpg" alt="">
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
            <img src="./images/drinks9.jpg" alt="">
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
            <img src="./images/drinks10.jpg" alt="">
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


<div id="others" class="category">
    <h2>others</h2>
    <div class="carousel-container">
        <div class="carousel-frame">
        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
        
        <div class="product-container">
        <!-- Add more shoe product images as needed -->
       <div id="product1">
        <div class="pro">
            <img src="./images/others1.jpg" alt="">
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
            <img src="./images/others2.jpg" alt="">
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
            <img src="./images/others3.jpg" alt="">
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
            <img src="./images/others4.jpg" alt="">
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
            <img src="./images/others5.jpg" alt="">
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
            <img src="./images/others6.jpg" alt="">
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
            <img src="./images/others7.jpg" alt="">
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
            <img src="./images/others9.jpg" alt="">
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
            <img src="./images/others10.jpg" alt="">
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
            <img src="./images/others8.jpg" alt="">
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
    <!--end of featured products  -->
        </section>

        <!-- new arrivals section -->
        <section class="new-arrivals">
            <div id="new-arrivals" class="category">
                <h2>New arrivals</h2>
                <div class="carousel-container">
                    <div class="carousel-frame">
                    <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                    
                    <div class="product-container">
                    <!-- Add more shoe product images as needed -->
                   <div id="product1">
                    <div class="pro">
                        <img src="./images/newarrivals1.jpg" alt="">
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
                        <img src="./images/newarrivals2.jpg" alt="">
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
                        <img src="./images/newarrivals3.jpg" alt="">
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
                        <img src="./images/newarrivals4.jpg" alt="">
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
                        <img src="./images/newarrivals5.jpg" alt="">
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
                        <img src="./images/newarrivals6.jpg" alt="">
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
                        <img src="./images/newarrivals7.jpg" alt="">
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
                        <img src="./images/newarrivals8.jpg" alt="">
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
                        <img src="./images/newarrivals9.jpg" alt="">
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
                        <img src="./images/newarrivals10.jpg" alt="">
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


                <div id="new-arrivals" class="category">
                    <!-- <h2>New arrivals</h2> -->
                    <div class="carousel-container">
                        <div class="carousel-frame">
                        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                        
                        <div class="product-container">
                        <!-- Add more shoe product images as needed -->
                       <div id="product1">
                        <div class="pro">
                            <img src="./images/newarrivals11.jpg" alt="">
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
                            <img src="./images/newarrivals12.jpg" alt="">
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
                            <img src="./images/newarrivals17.jpg" alt="">
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
                            <img src="./images/newarrivals14.jpg" alt="">
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
                            <img src="./images/newarrivals15.jpg" alt="">
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
                            <img src="./images/newarrivals16.jpg" alt="">
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
                            <img src="./images/newarrivals13.jpg" alt="">
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
                            <img src="./images/newarrivals18.jpg" alt="">
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
                            <img src="./images/newarrivals19.jpg" alt="">
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
                            <img src="./images/newarrivals120.jpg" alt="">
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
        </section>

        <section class="shoppingVideo">
                <iframe autoplay loop class="shopvideo" width="100%" height="360" src="https://www.youtube.com/embed/hS32fWMjbDk" ></iframe>
            <!-- https://youtu.be/hS32fWMjbDk -->
        </section>
        
        
         <!-- back to school deals section -->

         <section class="back-to-school-deals">
            <div id="back-to-school-deals" class="category">
                <h2>back to school deals</h2>
                <div class="carousel-container">
                    <div class="carousel-frame">
                    <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                    
                    <div class="product-container">
                    <!-- Add more shoe product images as needed -->
                   <div id="product1">
                    <div class="pro">
                        <img src="./images/newarrivals1.jpg" alt="">
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
                        <img src="./images/newarrivals2.jpg" alt="">
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
                        <img src="./images/newarrivals3.jpg" alt="">
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
                        <img src="./images/newarrivals4.jpg" alt="">
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
                        <img src="./images/newarrivals5.jpg" alt="">
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
                        <img src="./images/newarrivals6.jpg" alt="">
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
                        <img src="./images/newarrivals7.jpg" alt="">
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
                        <img src="./images/newarrivals8.jpg" alt="">
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
                        <img src="./images/newarrivals9.jpg" alt="">
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
                        <img src="./images/newarrivals10.jpg" alt="">
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
            
                <div id="new-arrivals" class="category">
                    <!-- <h2>New arrivals</h2> -->
                    <div class="carousel-container">
                        <div class="carousel-frame">
                        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                        
                        <div class="product-container">
                        <!-- Add more shoe product images as needed -->
                       <div id="product1">
                        <div class="pro">
                            <img src="./images/newarrivals1.jpg" alt="">
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
                            <img src="./images/newarrivals2.jpg" alt="">
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
                            <img src="./images/newarrivals3.jpg" alt="">
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
                            <img src="./images/newarrivals4.jpg" alt="">
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
                            <img src="./images/newarrivals5.jpg" alt="">
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
                            <img src="./images/newarrivals6.jpg" alt="">
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
                            <img src="./images/newarrivals7.jpg" alt="">
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
                            <img src="./images/newarrivals8.jpg" alt="">
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
                            <img src="./images/newarrivals9.jpg" alt="">
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
                            <img src="./images/newarrivals10.jpg" alt="">
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
            </section>

            <!-- coming soon page -->

            <section class="coming-soon-page">
                <div id="coming-soon-page" class="category">
                    <h2>Coming Soon</h2>
                    <div class="carousel-container">
                        <div class="carousel-frame">
                        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                        
                        <div class="product-container">
                        <!-- Add more shoe product images as needed -->
                       <div id="product1">
                        <div class="pro">
                            <img src="./images/comingsoon1.jpg" alt="">
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
                            <img src="./images/comingsoon2.jpg" alt="">
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
                            <img src="./images/comingsoon3.jpg" alt="">
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
                            <img src="./images/comingsoon9.jpg" alt="">
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
                            <img src="./images/comingsoon4.jpg" alt="">
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
                            <img src="./images/comingsoon5.jpg" alt="">
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
                            <img src="./images/comingsoon6.jpg" alt="">
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
                            <img src="./images/comingsoon7.jpg" alt="">
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
                            <img src="./images/comingsoon10.jpg" alt="">
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
                            <img src="./images/comingsoon8.jpg" alt="">
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

                <div id="coming-soon-page" class="category">
                    <!-- <h2>back to school deals</h2> -->
                    <div class="carousel-container">
                        <div class="carousel-frame">
                        <!-- <button id="left-arrow" class="arrow left-arrow" onclick="moveCarousel('left')">❮</button> -->
                        
                        <div class="product-container">
                        <!-- Add more shoe product images as needed -->
                       <div id="product1">
                        <div class="pro">
                            <img src="./images/comingsoon20.jpg" alt="">
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
                            <img src="./images/comingsoon11.jpg" alt="">
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
                            <img src="./images/newarrivals12.jpg" alt="">
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
                            <img src="./images/comingsoon13.jpg" alt="">
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
                            <img src="./images/comingsoon14.jpg" alt="">
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
                            <img src="./images/comingsoon15.jpg" alt="">
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
                            <img src="./images/comingsoon16.jpg" alt="">
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
                            <img src="./images/comingsoon17.jpg" alt="">
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
                            <img src="./images/comingsoon18.jpg" alt="">
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
                            <img src="./images/comingsoon19.jpg" alt="">
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
    <script>
        // Handle messages from other pages (e.g., the shop page)
        // window.addEventListener('storage', function (event) {
        //     if (event.key === 'cartItems') {
        //         cartItems = JSON.parse(event.newValue);
        //         displayCartItems();
        //     }
        // });

        // function displayCartItems() {
        //     const cartItemsDiv = document.getElementById('cartItems');
        //     const totalPriceSpan = document.getElementById('totalPrice');
        //     let totalPrice = 0;

        //     if (cartItems.length > 0) {
        //         cartItemsDiv.innerHTML = ''; // Clear existing content

        //         cartItems.forEach((item, index) => {
        //             const cartItem = document.createElement('div');
        //             cartItem.className = 'cartItem';
        //             cartItem.innerHTML = `
        //                 <img src="₦{item.image}" alt="₦{item.text}">
        //                 <p>₦{item.text}</p>
        //                 <p>Quantity: ₦{item.quantity}</p>
        //                 <p>₦₦{(item.price * item.quantity).toFixed(2)}</p>
        //                 <button onclick="removeFromCart(₦{index})">Remove</button>
        //             `;

        //             cartItemsDiv.appendChild(cartItem);
        //             totalPrice += item.price * item.quantity;
        //         });
        //     } else {
        //         cartItemsDiv.innerHTML = 'No items in the cart.';
        //     }

        //     totalPriceSpan.innerText = totalPrice.toFixed(2);
        // }

        // function removeFromCart(index) {
        //     cartItems.splice(index, 1);
        //     updateCartCount();
        //     displayCartItems();
        // }

        // function updateCartCount() {
        //     // Notify the shop page that the cart count has been updated
        //     window.opener.postMessage({ type: 'updateCartCount', count: calculateTotalQuantity() }, '*');
        // }

        // function calculateTotalQuantity() {
        //     return cartItems.reduce((total, item) => total + item.quantity, 0);
        // }
    </script>


</body>
</html>