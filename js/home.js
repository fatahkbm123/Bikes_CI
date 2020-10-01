$(document).ready(function () {
   $('.hamburger-menu').on('click', function () {
      $('.navbarResponsive').addClass('active');
      $('body').addClass('fixed');
   })

   $('.btnUser').on('click', function (e) {
      e.preventDefault();
      $('.btnUser i').toggleClass('fa-chevron-down fa-chevron-up');
      $('.userButton').toggleClass('active');
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

   $('form').on('submit', function (e) {
      e.preventDefault();
      let gambar = $(this)[0][0].value; //this get gambar
      let title = $(this)[0][1].value; //this get title
      let hargaAwal = $(this)[0][2].value; //this get hargaAwal
      let hargaAkhir = $(this)[0][3].value; //this get hargaAkhir
      let email = $(this)[0][4].value; //this get title

      $.ajax({
         url: 'http://localhost/Bikes_CI/Home/tambahCart',
         data: { gambar: gambar, title: title, hargaAwal: hargaAwal, hargaAkhir: hargaAkhir, email: email },
         type: 'POST',
         success: () => {
            Swal.fire(
               'Berhasil!',
               'Ditambahkan',
               'success'
            )
            setTimeout(() => {
               $('.swal2-container').remove();
               $('body').toggleClass('swal2-shown swal2-height-auto');
            }, 2000)
            Counter();
         }
      });
   })

   Counter();
   function Counter() {
      let email = $('.email').val();
      $.ajax({
         url: 'http://localhost/Bikes_CI/Home/cartItem',
         data: { email: email },
         type: 'POST',
         success: (data) => {
            $('#cartItem').html(data);
         }
      })
   }


});





