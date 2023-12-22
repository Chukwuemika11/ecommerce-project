let slideIndex = 0;

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change slide every 2 seconds
}

showSlides(); // Initial call to start the slidesho5


function scrollToCategory(category) {
    var categoryElement = document.getElementById(category);
    if (categoryElement) {
        categoryElement.scrollIntoView({ behavior: "smooth" });
    }
}
document.addEventListener('DOMContentLoaded', function () {
    // Wait for the DOM to be fully loaded

    // Select all links with the 'data-target' attribute
    var categoryLinks = document.querySelectorAll('[data-target]');

    // Attach click event listeners to each link
    categoryLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior of the link

            // Get the target from the 'data-target' attribute
            var target = link.getAttribute('data-target');

            // Scroll to the target section
            scrollToCategory(target);
        });
    });
});


function showDropdown() {
    document.getElementById("categoryDropdown").style.display = "block";
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('#searchInput')) {
        var dropdown = document.getElementById("categoryDropdown");
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        }
    }
};


let currentIndex = 0;
const itemsPerPage = 5; // Set the number of items visible on the screen

function moveCarousel(direction) {
    const productContainer = document.querySelector('.product-container');
    const productItems = document.querySelectorAll('.product-container > div');
    const itemWidth = productItems[0].offsetWidth + 10; // Adjust as needed

    const totalItems = productItems.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    if (direction === 'left' && currentIndex > 0) {
        currentIndex--;
    } else if (direction === 'right' && currentIndex < totalPages - 1) {
        currentIndex++;
    }

    const translateValue = -currentIndex * itemsPerPage * itemWidth;
    productContainer.style.transform = `translateX(${translateValue}px)`;

    // Toggle arrow visibility based on currentIndex
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');

    leftArrow.style.display = currentIndex > 0 ? 'block' : 'none';
    rightArrow.style.display = currentIndex < totalPages - 1 ? 'block' : 'none';
}


document.addEventListener('DOMContentLoaded', function () {
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');

    leftArrow.addEventListener('click', function () {
        moveCarousel('left');
    });

    rightArrow.addEventListener('click', function () {
        moveCarousel('right');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
      var scrollToTopContainer = document.getElementById('scrollToTopContainer');
      if (window.scrollY > 100) {
        scrollToTopContainer.classList.add('show');
      } else {
        scrollToTopContainer.classList.remove('show');
      }
    });
  });
  
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  

//   for media queries small screen sizes

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar')

if (bar){
    bar.addEventListener('click',() => {
nav.classList.add('active');
    })
}

if (close){
    close.addEventListener('click',() => {
nav.classList.remove('active');
    })
}
// shop page 
            
function goToShopPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#shoes';
}

function goToShirtPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#clothes';
}

function goToJewelryPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#jewelry';
}
            
function goToFoodPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#food';
}


function culiniaryDelightsPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#culiniary-delights';
}

function drinksPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#drinks';
}

function goToSportWearsPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#sport-wears';
}

function othersPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#others';
}

function newArrivalsPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#new-arrivals';
}

function newArrivalsPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#new-arrivals';
}

function backToSchoolDealsPage() {
    // Navigate to the shop page with the corresponding section
    window.location.href = './shop.html#back-to-school-deals';
}

function comingSoonPage() {
    // Navigate to the shop page with the corresponding section
window.location.href = './shop.html#coming-soon-page';
}

// cart page 

  let cartItems = [];

  function addToCart(itemText, itemPrice, itemImage) {
    const existingItem = cartItems.find(item => item.text === itemText);

    if (existingItem) {
      existingItem.quantity++;
    } else {
      const newItem = {
        text: itemText,
        price: itemPrice,
        image: itemImage,
        quantity: 1
      };
      cartItems.push(newItem);
    }

    updateCartCount();
  }

  function updateCartCount() {
    document.getElementById('cartCount').innerText = calculateTotalQuantity();
  }

  function calculateTotalQuantity() {
    return cartItems.reduce((total, item) => total + item.quantity, 0);
  }

  function displayCartItems() {
    const cartItemsDiv = document.getElementById('cartItems');
    const totalPriceSpan = document.getElementById('totalPrice');
    let totalPrice = 0;

    if (cartItems.length > 0) {
      cartItemsDiv.innerHTML = ''; // Clear existing content

      cartItems.forEach((item, index) => {
        const cartItem = document.createElement('div');
        cartItem.className = 'cartItem';
        cartItem.innerHTML = `
          <img src="${item.image}" alt="${item.text}">
          <p>${item.text}</p>
          <p>Quantity: ${item.quantity}</p>
          <p>$${(item.price * item.quantity).toFixed(2)}</p>
          <button onclick="removeFromCart(${index})">Remove</button>
        `;

        cartItemsDiv.appendChild(cartItem);
        totalPrice += item.price * item.quantity;
      });
    } else {
      cartItemsDiv.innerHTML = 'No items in the cart.';
    }

    totalPriceSpan.innerText = totalPrice.toFixed(2);
  }



  function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateCartCount();
  displayCartItems();
}

function goToPage(page) {
  // Switch to the specified page
  document.getElementById('shopPage').style.display = page === 'shop' ? 'block' : 'none';
  document.getElementById('cartPage').style.display = page === 'cart' ? 'block' : 'none';

  if (page === 'cart') {
    // Call displayCartItems when switching to the cart page
    displayCartItems();
  }

  // Add similar logic for other pages
}

  

function checkout() {
  // Implement your checkout logic here
  alert('Checkout functionality will be implemented.');
}


// Call displayCartItems when the cart page loads
document.addEventListener('DOMContentLoaded', function () {
  if (window.location.href.includes('cart.html')) {
    displayCartItems();
  }
});


// categories page
// scrolling
  // const scrollingContainer = document.querySelector('.scrolling');

  //   scrollingContainer.addEventListener('mouseenter', () => {
  //     scrollingContainer.classList.remove('scrolling');
  //   });

  //   scrollingContainer.addEventListener('mouseleave', () => {
  //     scrollingContainer.classList.add('scrolling');
  //   });
