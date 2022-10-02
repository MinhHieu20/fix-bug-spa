const $ = document.querySelector.bind(document);
(function($){
  $(document).ready(function () {
    // $.lockfixed("#sidebar-program", {offset: {top: 20, bottom: 1000} });
    // $.lockfixed("#sidebar-training", {offset: {top: 20, bottom: 1000} });
  });
})(jQuery);
const tabs = document.querySelectorAll(".tab-item");
const panes = document.querySelectorAll(".tab-pane");
const tabActive = $(".tab-item.active");
tabs.forEach((tab, index) => {
  const pane = panes[index];
  tab.onclick = function () {
    $(".tab-item.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    this.classList.add("active");
    pane.classList.add("active");
  };
});

// // ------------------------------------------------------------------

const tabCategory = document.querySelectorAll(".tab-category");
const tabPane = document.querySelectorAll(".slide-container");
const tabsActive = $(".tab-category.active");
tabCategory.forEach((tab, index) => {
  const pane = tabPane[index];
  tab.onclick = function () {
    $(".tab-category.active").classList.remove("active");
    $(".slide-container.active").classList.remove("active");
    this.classList.add("active");
    pane.classList.add("active");
  };
});

// --------------------------------------------------------------------------------

const cart = document.querySelector(".header-contact-right__cart");
const notify = document.querySelector(".header-cart--notify");
const close = document.querySelector(".header-cart--notify__info--top-icon");
cart.addEventListener("click", () => {
  close.classList.toggle("show");
});
cart.addEventListener("click", () => {
  notify.classList.toggle("show");
});

// // ------------------------------
const TipBeautyItems = document.querySelectorAll(".beautify--program__category--list-item");
const TipBeautyPanes = document.querySelectorAll(".beautify-program-list");
// const tabActive = $(".address-nav-location__item.active");
TipBeautyItems.forEach((tab, index) => {
  const pane = TipBeautyPanes[index];
  tab.onclick = function () {
    $(".beautify--program__category--list-item.active").classList.remove("active");
    $(".beautify-program-list").classList.remove("show");

    this.classList.add("active");
    pane.classList.add("show");
  };
});

// phần js ở trang traninng-detail
//------------------------------
const TraningItems = document.querySelectorAll(".details-menu-list__item--link");
TraningItems.forEach((tab) => {
  tab.onclick = function () {
    $(".details-menu-list__item--link.active").classList.remove("active");

    this.classList.add("active");
  };
});

// // ---------------------------------------------------------------------------------
const openModalBtn = document.querySelector(".service--detail__btn");
const openModalBtnlanding = document.querySelector(".content-landing-acne__btn");
const modal = document.querySelector(".form--contact");

function toggleModal() {
  modal.classList.toggle("hide");
}
if (modal) {
  modal.addEventListener(
    "click",
    (e) => {
      if (e.target == e.currentTarget) toggleModal();
    },
    false
  );
}
if (openModalBtn) {
  openModalBtn.addEventListener("click", toggleModal, false);
}
if (openModalBtnlanding) {
  openModalBtnlanding.addEventListener("click", toggleModal, false);
}

// // ---------------------------------------------------------------------------------
const tabRecruit = document.querySelectorAll(".recruit-pagination-list__item");
const paneRecruit = document.querySelectorAll(".main-recruit-content__list");
tabRecruit.forEach((tab, index) => {
  const pane = paneRecruit[index];
  tab.onclick = function () {
    $(".recruit-pagination-list__item.active").classList.remove("active");
    $(".main-recruit-content__list.show").classList.remove("show");

    this.classList.add("active");
    pane.classList.add("show");
  };
});

// Search mobile
const formSearch = document.querySelector('.search-mobile-form');
const searchBtn = document.querySelector('.search-mobile');

function toggleModalSearch() {
  formSearch.classList.toggle("hide");
}
searchBtn.addEventListener("click", toggleModalSearch);

formSearch.addEventListener("click", (e) => {
  if (e.target == e.currentTarget) toggleModalSearch();
});

//-----------------------------------------------------------------
// scroll menu
const navMobileBtn = document.querySelector(".js-mobile-btn");
const mobileMenu = document.querySelector(".js-mobile-menu");
const mobileOverlay = document.querySelector(".mobile-menu-overlay");
navMobileBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("show");
  mobileOverlay.classList.toggle("show");
});
mobileOverlay.addEventListener("click", () => {
  mobileMenu.classList.remove("show");
  mobileOverlay.classList.remove("show");
});
// scroll menu__list
// slider
var swiper = new Swiper(".slide-content", {
  slidesPerView: 4,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    520: {
      slidesPerView: 3,
    },
    950: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});
//  address single page
const addressItems = document.querySelectorAll(".address-nav-location__item");
const addressPanes = document.querySelectorAll(".location-details");
// const tabActive = $(".address-nav-location__item.active");
addressItems.forEach((tab, index) => {
  const pane = addressPanes[index];
  tab.onclick = function () {
    $(".address-nav-location__item.active").classList.remove("active");
    $(".location-details.active").classList.remove("active");

    this.classList.add("active");
    pane.classList.add("active");
  };
});


// Show contect service
const tabsHeading = document.querySelectorAll(".tab-item-heading");
const panesContent = document.querySelectorAll(".tab-pane-content");

tabsHeading.forEach((tab, index) => {
  const paneContent = panesContent[index];

  tab.onclick = function () {
    $(".tab-item-heading.active").classList.remove("active");
    $(".tab-pane-content.active").classList.remove("active");

    this.classList.add("active");
    paneContent.classList.add("active");
  };
});

// show google maps
const showBtns = document.querySelectorAll(".location-view");
const modalMaps = document.querySelector('.modal--maps');
const modalContainer = document.querySelector(".modal--maps--address");
const modalClose = document.querySelector('.js-modal-close')

function showModalMaps(){
  modalMaps.classList.add('open');
}
function hideModalMaps(){
  modalMaps.classList.remove('open');
}

for(const showBtn of showBtns){
  showBtn.addEventListener("click", showModalMaps);
}

modalClose.addEventListener("click", hideModalMaps);
modalMaps.addEventListener('click', hideModalMaps)
modalContainer.addEventListener('click', function(e) {
  e.stopPropagation()
});

// // Show cart_Product-details
// const cartMobileBtn = document.querySelector('.js-mobile-btn__cart')
// const cartMobile = document.querySelector('.mobile-cart .header-cart-notify__mobile')
// var mobileOverlayCart = document.querySelector('.mobile-cart-overlay')
// const closeCart =  document.querySelector('.close-mobile-cart')
//
// cartMobileBtn.addEventListener('click', () => {
//   cartMobile.classList.toggle('show')
//   mobileOverlayCart.classList.toggle('show')
// } );
// closeCart.addEventListener('click', () => {
//   cartMobile.classList.remove('show')
//   mobileOverlayCart.classList.toggle('show')
// });
// mobileOverlayCart.addEventListener('click', () =>{
//   cartMobile.classList.toggle('show')
//   mobileOverlayCart.classList.toggle('show')
// });

//product store
const productItems = document.querySelectorAll(".product-cat__menu-item");
const productPans = document.querySelectorAll(".product-details");
productItems.forEach((tab, index) => {
  const pane = productPans[index];
  tab.onclick = function () {
    $(".product-cat__menu-item.active").classList.remove("active");
    $(".product-details.show").classList.remove("show");

    this.classList.add("active");
    pane.classList.add("show");
  };
});
(function($){
  $('.quantity').on('click', '.quantity-button.minus',
    function(e) {
      $input = $(this).next('input.qty');
      var val = parseInt($input.val());
      var step = $input.attr('step');
      step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
      if (val > 0) {
        $input.val( val - step ).change();
      }
  });
  $('.quantity').on('click', '.quantity-button.plus', function(e) {
    $input = $(this).prev('input.qty');
    var val = parseInt($input.val());
    var step = $input.attr('step');
    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
    $input.val( val + step ).change();
  });
  $('.extension-active').click(function() {
    $('html,body').animate({
          scrollTop: $('.extension-focus').offset().top}, 'slow');
  });
  $('.details-graduate-outstanding__list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<div class="slick-prev"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-left.png"></div>',
    nextArrow: '<div class="slick-next"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-right.png"></div>',
  });
  
  $('.product-similar-list').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<div class="slick-prev"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-left.png"></div>',
    nextArrow: '<div class="slick-next"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-right.png"></div>',
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
  // if (window.matchMedia("(max-width: 480px)").matches) {
  //   $('.product-similar-list').slick({
  //     infinite: true,
  //     speed: 300,
  //     slidesToShow: 2,
  //     slidesToScroll: 1,
  //     prevArrow: '<div class="slick-prev"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-left.png"></div>',
  //     nextArrow: '<div class="slick-next"><img src="http://localhost:8888/beauty-spa-wordpress/wp-content/themes/ls_theme_defalut/images/service/arrow-right.png"></div>',
  //   });
  // }
  // $('.product-list').simpleLoadMore({
  //   itemsToLoad: 4,
  //   count: 10,
  //   item:'div',
  //   btnHTML:'<a href="#" class="load-more__btn">View More <i class="fas fa-angle-down"></i></a>',
  // });

})(jQuery);

