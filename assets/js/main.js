$(function () {
  var navbar = $(".header-inner");
  var top_nav = $(".top_nav");
  var logo1 = $(".logo1");
  var logo2 = $(".logo2");
  var togel1 = $(".toggel_btn1");
  var togel2 = $(".toggel_btn2");
  $(window).scroll(function () {
    if ($(window).scrollTop() <= 40) {
      top_nav.css("display", "block");
      togel1.css("display", "block");
      togel2.css("display", "none");
      logo1.css("display", "block");
      logo2.css("display", "none");
      navbar.removeClass("navbar-scroll");
    } else {
      top_nav.css("display", "none");
      togel1.css("display", "none");
      togel2.css("display", "block");
      logo1.css("display", "none");
      logo2.css("display", "block");
      navbar.addClass("navbar-scroll");
    }
  });
});
$(function () {
  var navbar = $(".nav-product");
  $(window).scroll(function () {
    if ($(window).scrollTop() <= 300) {
      navbar.removeClass("fix-nav");
    } else {
      navbar.addClass("fix-nav");
    }
  });
});
//-------------location--------------------
function myloc() {
  location.href = "https://goo.gl/maps/EDR6HWEbjRcqb64o7";
}
//   --------------------------------------------current-page---------------

const currentlink = location.href;
const menuitems = document.getElementsByClassName("nav-link");
// console.log(menuitems);
for (let i = 0; i < menuitems.length; i++) {
  if (menuitems[i].href === currentlink) {
    menuitems[i].className = "current";
  }
}

// ----------------number_validation-----------------------
function validateNumber(elem, alertId) {
  if (isNaN(elem.value)) {
    document.getElementById(alertId).innerHTML = " * Enter Only Number";
  } else {
    document.getElementById(alertId).innerHTML = "";

    if (elem.value.length > 10 || elem.value.length < 10) {
      document.getElementById(alertId).innerHTML = "* Enter Only 10 digits";
    }
  }
}

// -------------------Change-language------
document.addEventListener("DOMContentLoaded", function () {
  const languageSelect = document.getElementById("languageSelect");

  languageSelect.addEventListener("change", function () {
    const selectedLanguage = languageSelect.value;

    // Save the selected language in localStorage or a cookie
    localStorage.setItem("selectedLanguage", selectedLanguage);

    // Reload the page to apply the language change
    window.location.reload();
  });

  // Check if a language is already selected and apply it on page load
  const storedLanguage = localStorage.getItem("selectedLanguage");
  if (storedLanguage) {
    languageSelect.value = storedLanguage;
  }
});

//   //----------------------------gallery---------------------
//   if ($.isFunction($.fn.owlCarousel)) {
//     $(".gallery_slider_area").owlCarousel({
//       // autoplay: true,
//       slideSpeed: 1000,
//       autoplayTimeout: 2000,
//       autoplayHoverPause: true,
//       items: 4,
//       loop: true,
//       // rtl: true,
//       mouseDrag: true,
//       // nav: true,
//       // center:true,
//       navText: [
//         '<i class="fa fa-arrow-left"></i>',
//         '<i class="fa fa-arrow-right"></i>',
//       ],
//       margin: 10,
//       // dots: true,
//       // dotsEach: true,
//       responsive: {
//         320: {
//           items: 1,
//         },
//         767: {
//           items: 2,
//         },
//         600: {
//           items: 3,
//         },
//         1000: {
//           items: 4,
//         },
//       },
//     });

//     //----------------------------Sponsors_slider_area---------------------
$(".Sponsors_slider_area_1").owlCarousel({
  autoplay: false,
  autoplayHoverPause: false,
  items: 5,
  loop: false,
  mouseDrag: true,

  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  margin: 20,
  dots: false,
  responsive: {
    320: {
      items: 5,
    },
    600: {
      items: 5,
    },
    767: {
      items: 5,
    },

    1000: {
      items: 5,
    },
  },
});
$(".Sponsors_slider_area_2").owlCarousel({
  autoplay: false,
  autoplayHoverPause: false,
  items: 4,
  loop: false,
  mouseDrag: true,

  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  margin: 0,
  dots: false,
  responsive: {
    320: {
      items: 3,
    },
    600: {
      items: 3,
    },
    767: {
      items: 3,
    },

    1000: {
      items: 4,
    },
  },
});
// $(".Sponsors_slider_area_3").owlCarousel({
//   autoplay: true,
//   slideSpeed: 1000,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
//   items: 4,
//   loop: true,
//   mouseDrag: true,
//   navText: [
//     '<i class="fa fa-arrow-left"></i>',
//     '<i class="fa fa-arrow-right"></i>',
//   ],
//   margin: 20,
//   dots: false,
//   responsive: {
//     320: {
//       items: 1,
//     },
//     600: {
//       items: 2,
//     },
//     767: {
//       items: 3,
//     },

//     1000: {
//       items: 4,
//     },
//   },
// });
//     $(".Sponsors_slider_area_4").owlCarousel({
//       autoplay: true,
//       slideSpeed: 1000,
//       autoplayTimeout: 2000,
//       autoplayHoverPause: true,
//       items: 4,
//       loop: true,
//       mouseDrag: true,

//       navText: [
//         '<i class="fa fa-arrow-left"></i>',
//         '<i class="fa fa-arrow-right"></i>',
//       ],
//       margin: 20,
//       dots: false,
//       responsive: {
//         320: {
//           items: 1,
//         },
//         600: {
//           items: 2,
//         },
//         767: {
//           items: 3,
//         },

//         1000: {
//           items: 4,
//         },
//       },
//     });
//   }
//   // -----------------------slick-carousel-for-gallery----------------
//   $(".slider-single").slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     fade: true,
//     arrows: false,
//     asNavFor: ".slider-nav",
//   });

//   $(".slider-nav").slick({
//     slidesToShow: 5,
//     infinite: true,
//     // autoplay: true,
//     autoplaySpeed: 2000,
//     slidesToScroll: 1,
//     dots: true,
//     arrows: true,
//     asNavFor: ".slider-single",
//     focusOnSelect: true,
//     centerMode: true,
//   });

//   // --------------------------------Fancybox--------------
//   if ($.isFunction($.fn.fancybox)) {
//     $('[data-fancybox],[data-fancybox="gallery"]').fancybox({});
//   }

const productSections = document.querySelectorAll(".home_product");
const navbarLinks = document.querySelectorAll(".nav-product a");

function highlightProduct() {
  productSections.forEach((section, index) => {
    const position = section.getBoundingClientRect();

    if (position.top <= 100 && position.bottom >= 100) {
      navbarLinks.forEach((link) => link.classList.remove("active-product"));
      navbarLinks[index].classList.add("active-product");
    }
  });
}

function scrollToSection(e) {
  e.preventDefault();
  const targetId = e.target.getAttribute("href").substring(1); // Remove the # from the href
  const targetSection = document.getElementById(targetId);

  if (targetSection) {
    window.scrollTo({
      top: targetSection.offsetTop - 65, // Account for navbar height
      behavior: "smooth",
    });
  }
}

window.addEventListener("scroll", highlightProduct);

navbarLinks.forEach((link) => {
  link.addEventListener("click", scrollToSection);
});





// const productSections = document.querySelectorAll('.home_product');
// const navbarLinks = document.querySelectorAll(".nav-product a");
// const categoryBar = document.querySelector(".Sponsors_slider_area_2");

// function highlightProduct() {
//     const windowTop = window.scrollY;
//     const categoryBarTop = categoryBar.getBoundingClientRect().top + windowTop;
//     const categoryBarHeight = categoryBar.offsetHeight;

//     let activeCategoryIndex = -1;

//     productSections.forEach((section, index) => {
//         const sectionTop = section.offsetTop;
//         const sectionBottom = sectionTop + section.offsetHeight;

//         if (windowTop >= sectionTop && windowTop < sectionBottom) {
//             activeCategoryIndex = index;
//         }
//     });

//     if (activeCategoryIndex !== -1) {
//         navbarLinks.forEach((link) => link.classList.remove("active-product"));
//         navbarLinks[activeCategoryIndex].classList.add("active-product");

//         // Scroll the category bar if necessary
//         const linkWidth = navbarLinks[activeCategoryIndex].offsetWidth;
//         const linkLeft = navbarLinks[activeCategoryIndex].offsetLeft;

//         if (linkLeft < 0) {
//             // Scroll left to bring the active link into view
//             categoryBar.scrollTo({
//                 left: categoryBar.scrollLeft + linkLeft,
//                 behavior: "smooth",
//             });
//         } else if (linkLeft + linkWidth > categoryBar.offsetWidth) {
//             // Scroll right to bring the active link into view
//             categoryBar.scrollTo({
//                 left: linkLeft + linkWidth - categoryBar.offsetWidth + categoryBar.scrollLeft,
//                 behavior: "smooth",
//             });
//         }
//     }
// }

// function scrollToSection(e) {
//     e.preventDefault();
//     const targetId = e.target.getAttribute("href").substring(1); // Remove the # from the href
//     const targetSection = document.getElementById(targetId);

//     if (targetSection) {
//         window.scrollTo({
//             top: targetSection.offsetTop - 65, // Account for navbar height
//             behavior: "smooth",
//         });
//     }
// }

// window.addEventListener("scroll", highlightProduct);

// navbarLinks.forEach((link) => {
//     link.addEventListener("click", scrollToSection);
// });

