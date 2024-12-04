let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick =() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll =() =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true, 
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop:true, 
    spaceBetween: 20,
    autoplay:{
       delay:2500,
       disableOnInteraction:false,

    },
    breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
});


document.addEventListener('DOMContentLoaded', () => {
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 6;

  // Initially hide all boxes except for the first 3
  let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  boxes.forEach((box, index) => {
      if (index >= currentItem) {
          box.style.display = 'none';
      } else {
          box.style.display = 'inline-block';
      }
  });

  loadMoreBtn.onclick = () => {
      // Show the next 3 boxes
      for (let i = currentItem; i < currentItem + 3 && i < boxes.length; i++) {
          boxes[i].style.display = 'inline-block';
      }
      
      currentItem += 3;

      // Hide the button if all boxes are visible
      if (currentItem >= boxes.length) {
          loadMoreBtn.style.display = 'none';
      }
  };
});

const form = document.getElementById('bookingForm');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const emailError = document.getElementById('emailError');
    const phoneError = document.getElementById('phoneError');

    // Regex for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Form submission event
    form.addEventListener('submit', (e) => {
        let isValid = true;

        // Email validation
        if (!emailRegex.test(emailInput.value.trim())) {
            emailError.style.display = 'block';
            isValid = false;
        } else {
            emailError.style.display = 'none';
        }

        // Phone validation (exactly 10 digits)
        if (!/^\d{10}$/.test(phoneInput.value.trim())) {
            phoneError.style.display = 'block';
            isValid = false;
        } else {
            phoneError.style.display = 'none';
        }

        // If any validation fails, prevent form submission
        if (!isValid) {
            e.preventDefault();
        }
    });




