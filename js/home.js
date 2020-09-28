$(document).ready(function () {
   $('.hamburger-menu').on('click', function () {
      $('.navbarResponsive').addClass('active');
      $('body').addClass('fixed');
   })

   $('.scroll').on('click', function (e) {
      e.preventDefault();

      var href = $(this).attr('href');
      var Tujuan = $(href);

      $('body, html').animate({
         'scrollTop': Tujuan.offset().top - 150
      }, 1000);


   });

   $('.scroll2').on('click', function (e) {
      e.preventDefault();

      var href = $(this).attr('href');
      var Tujuan = $(href);

      $('body, html').animate({
         'scrollTop': Tujuan.offset().top - 150
      }, 1000);

      setTimeout(() => {
         $('.navbarResponsive').removeClass('active');
         $('body').removeClass('fixed');
      }, 1150)
   });

   $('.hamburger-menu2').on('click', function () {
      $('.navbarResponsive').removeClass('active');
      $('body').removeClass('fixed');
   })

   $('.Load').on('click', function (e) {
      e.preventDefault();
      $(this).addClass('hide');
      $('.loader').addClass('show');
      setTimeout(() => {
         $('.loader').removeClass('show');
         $('.Load').removeClass('hide');
      }, 2000)
   });

   $('.grid__item').hover(function () {
      $(this).toggleClass('active');
   })

   $('.center').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      customPaging: function (slider, i) {
         // this example would render "tabs" with titles
         return '<span class="dot"></span>';
      },
   });

   $('.slider').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
   });

})


