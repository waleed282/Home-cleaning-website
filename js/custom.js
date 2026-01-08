$(document).ready(function () {

  // MOBILE-NAVIGATION-LIST

  $('.navigation-list').clone().appendTo('.mobile-menu-body');

  $('.hamburger').on('click', function () {
    if (!$('.mobile-menu').hasClass('mobile-view')) {
      $('.mobile-menu').addClass('mobile-view');
    } else {
      $('.mobile-menu').removeClass('mobile-view');
    }
  });

  $('#menu-close').on('click', function () {
    $('.mobile-menu').removeClass('mobile-view');
    $('.dropdown-li').removeClass('open');
    $('.dropdown-li').find('>.dropdown-list').hide(200);
  });

  $('.mobile-menu .dropdown-li>a').append('<i class="fa fa-angle-right"></i>')

  $('.mobile-menu .dropdown-li>a').click(function () {
    const parent = $(this).parent('.dropdown-li');
    if (!parent.hasClass('open')) {
      const ulParent = parent.parent();
      ulParent.find('.dropdown-li.open').find('>.dropdown-list').hide(200);
      ulParent.find('.dropdown-li.open').removeClass('open');
      parent.addClass('open');
      parent.find('>.dropdown-list').show(200);
    } else {
      parent.removeClass('open');
      parent.find('>.dropdown-list').hide(200);
    }
  });


  // SCROLL JS

  // $('.scroller').mCustomScrollbar();

  // WOW JS

  new WOW().init();

  // REVIEW SLIDER JS

  const swiper = new Swiper('.my-slider', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    slidesPerView: 1,

  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  
  });
  
  


});



const slider = document.getElementById('slider');
const main = document.getElementById('imageComparison');
const beforeImg = main.querySelector('.before');

slider.addEventListener('input', function () {
  const value = this.value + '%';
  main.style.setProperty('--slider-thumb-position', value);
  beforeImg.style.width = value;
});





function toggleMenu() {
      const menu = document.getElementById("menu");
      const hamburger = document.getElementById("hamburger-icon");
      const close = document.getElementById("close-icon");

      menu.classList.toggle("open");

      if (menu.classList.contains("open")) {
        hamburger.style.display = "none";
        close.style.display = "block";
      } else {
        hamburger.style.display = "block";
        close.style.display = "none";
      }
    }

    // Hide close icon by default
    window.onload = () => {
      document.getElementById("close-icon").style.display = "none";
    };
    
    
        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                document.querySelectorAll('.faq-item').forEach(faqItem => {
                    if(faqItem !== item) {
                        faqItem.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            });
        });
