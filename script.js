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


// shop page

// function goToShopPage(shop) {
//     // Navigate to the shop page with the corresponding section
//     window.location.href = 'shop/#shoes';
// }