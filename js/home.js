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
            loadDataCart();
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
            if (data == 0) {
               $('.parentHover').html('<div class="contentHoverEmpty"><span>Keranjang Kamu masih kosong</span></div>');
            } else {
               $('.contentHoverEmpty').remove();
               $('.parentHover').html(
                  '<div class="contentHover"><div class="header"><p>Baru saja di tambahkan!</p></div><div class="uyu"></div><div class="Btn"><a href="" class="btn btn-outline-danger d-block CekKeranjang">Check Keranjang</a></div></div>'
               );
            }
            loadDataCart();
         }
      })
   }

   $('.hoverCart').hover(function () {
      $('.parentHover').toggleClass('active');
   });

   $(document).on('click', '.hapusCart', function (e) {
      e.preventDefault()
      let id = $(this).data('id');
      let email = $('.email').val();

      let elemen = $(this).parent();
      $.ajax({
         url: 'http://localhost/Bikes_CI/Home/deleteCart',
         data: { id: id, email: email },
         type: 'POST',
         success: (data) => {
            var dataResponse = JSON.parse(data);
            console.log(data);
            if (dataResponse.statusCode == 200) {
               elemen.fadeOut().remove();
            }

            if (data === '0') {
               $('.parentHover').html('<div class="contentHoverEmpty"><span>Keranjang Kamu masih kosong</span></div>');
            }
            loadDataCart();
            Counter();
         }
      })
   });

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

   loadDataCart();
   function loadDataCart() {
      let email = $('.email').val();
      $.ajax({
         url: 'http://localhost/Bikes_CI/Home/loadData',
         type: 'POST',
         data: { email: email },
         success: (data) => {
            $('.uyu').html(data);
         }
      })
   }


});





