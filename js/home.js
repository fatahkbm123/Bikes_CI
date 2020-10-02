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
      let form = $(this).closest('form');
      let gambar = form.find('.gambar').val();
      let title = form.find('.title').val();
      let hargaAwal = form.find('.hargaAwal').val();
      let hargaAkhir = form.find('.hargaAkhir').val();
      let email = $('.email').val();
      let id = form.find('.id').val();

      $.ajax({
         url: 'http://localhost/Bikes_CI/Home/tambahCart',
         data: { gambar: gambar, title: title, hargaAwal: hargaAwal, hargaAkhir: hargaAkhir, email: email, id: id },
         type: 'POST',
         success: (data) => {
            console.log(data);
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





