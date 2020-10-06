$('.slick').slick({
   slidesToShow: 1,
   infinite: true,
   speed: 500,
   fade: true,
   cssEase: 'linear',
   arrows: false,
   dots: true,
   customPaging: function (slider, i) {
      // this example would render "tabs" with titles
      return '<span class="dot"></span>';
   },
});

$('.btnUser').on('click', function (e) {
   e.preventDefault();
   $('.btnUser i').toggleClass('fa-chevron-down fa-chevron-up');
   $('.userButton').toggleClass('active');
})

let jmlProduk = parseInt($('.jmlProduk').data('jmlproduk'));
let Qty = document.querySelector('.Qty');
let harga = document.querySelector('.harga');
let hargaAwal = harga.getAttribute('data-harga');
let hargaAkhir = document.querySelector('.harga2');
let Qty2 = document.querySelector('.Qty2');

$('.plus').on('click', function (e) {
   e.preventDefault();
   if (Qty.value < jmlProduk) {
      Qty.value++;
      Qty2.value++;
      hargaAkhir.value = hargaAwal * Qty.value;
      harga.innerHTML = hargaAwal * Qty.value;
   }
})

$('.minus').on('click', function (e) {
   e.preventDefault();
   if (Qty.value > 1) {
      Qty.value--;
      Qty2.value--;
      hargaAkhir.value -= hargaAwal;
      harga.innerHTML -= hargaAwal;
   }
})

$(document).on('submit', 'form', function (e) {
   e.preventDefault();

   let hargaAwal = $('.harga').attr('data-harga');
   let hargaAkhir = $('.harga2').val();
   let title = $('.d-block').attr('data-title');
   let gambar = $('.jumbo').attr('data-gambar');
   let jumlahProduk = $('.Qty2').val();
   let email = $('.email').val();
   let pcode = $('.pcode').val();
   let id = $('.id').val();

   $.ajax({
      url: 'http://localhost/Bikes_CI/Detail/tambahCart',
      data: {
         hargaAwal: hargaAwal, hargaAkhir: hargaAkhir,
         title: title, gambar: gambar,
         jmlProduk: jumlahProduk, email: email,
         pcode: pcode, id: id
      },
      type: 'POST',
      success: (data) => {
         Swal.fire({
            title: 'Berhasil!',
            text: 'Ditambahkan',
            icon: 'success',
            position: 'top-end'
         })

         Qty.value = 1;
         Qty2.value = 1;

         setTimeout(() => {
            $('.swal2-container').remove();
            $('body').toggleClass('swal2-shown swal2-height-auto');
         }, 2000)
         Counter();
         if (data === '0') {
            $('.stock').html('Stock sudah terjual habis.');
            $('.pBtn').html('<button disabled class="btn btn-outline-primary p-2 mt-3 addProduct"><i class="fas fa-cart-plus">&nbsp;</i> Masukkan Keranjang</button>')
            Qty.value = 0;
         }
         $('.jmlProduk').html(parseInt(data));
      }
   })
   jmlProduk = jmlProduk - Qty.value;
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
         if (data < 10) {
            $('.UYE').css({
               'right': '0px'
            })
            $('.KERANJANG').css({
               'left': '0px'
            })
         } else if (data > 9) {
            $('.UYE').css({
               'right': '-10px'
            })
            $('.KERANJANG').css({
               'left': '12px'
            })
         }
      }
   })
}

if (jmlProduk == 0) {
   $('.stock').html('Stock sudah terjual habis.');
   $('.pBtn').html('<button disabled class="btn btn-outline-primary p-2 mt-3 addProduct"><i class="fas fa-cart-plus">&nbsp;</i> Masukkan Keranjang</button>');
   Qty.value = 0;
}



