let loadCart = (function () {
   let items = '';
   $.ajax({
      url: 'http://localhost/Bikes_CI/Cart/loadCart?email=' + $('.email').val(),
      success: data => {
         const dataJson = JSON.parse(data);
         if (data == 1) {
            $('section').html('<div class="container notFound"><div class="row"><div class="col-lg-12"><div class="form-group"><h1><i class="fas fa-cart-arrow-down"></i></h1 ><span> Uppss, Your cart is blank</span><hr class="shadow"><a href="http://localhost/Bikes_CI/Home" class="btn btn-outline-primary shadow">Continues Shopping</a></div><div/><div/></div> ');
            $('.notFound').addClass('fade-in');
         } else {
            dataJson.forEach(cart => {
               items += `<div class="row RCart"><div class="col-lg-7 CCart shadow-sm"><div class="form-inline" style="position: relative;"><form><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input checked" value="${cart.hargaAwal * cart.qty}" id="customCheck${cart.id}"><label class="custom-control-label" for="customCheck${cart.id}"></label></div></form><img src="http://localhost/Bikes_CI/asset/FotoProduct/${cart.gambar}" width="100"><span class="title">${cart.title}</span><div class="form-group"><a href="" class="hapus" data-id="${cart.id}">Hapus</a></div><span class="ml-auto qty">${cart.qty}</span><span class="price">Rp ${cart.hargaAwal * cart.qty}</span></div></div></div>`;
               $('.Cart').html(items);
            })
         }

         $('.checked').on('click', function () {
            var add = 0;
            const checkboxes = document.querySelectorAll('.checked');
            for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i].checked) {
                  add += parseInt(checkboxes[i].value);
               } else if (checkboxes[i].checked === false) {
                  document.querySelector('.checkAll').checked = false;
               }
            }
            var bilangan = add;
            var reverse = bilangan.toString().split('').reverse().join(''),
               ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            $('.totalHarga').html(ribuan);
         })


      }
   })
})();

$(document).on('click', '.hapusAll', function (e) {
   e.preventDefault();
   const email = $('.email').val();
   $.ajax({
      url: `http://localhost/Bikes_CI/Cart/deleteCartAll?email=${email}`,
      success: data => {
         const res = JSON.parse(data).dataCart;
         if (res - res === 0) {
            $('.RCart').addClass('remove-item');

            setTimeout(() => {
               $('.RCart').remove();
               $('section').html('<div class="container notFound"><div class="row"><div class="col-lg-12"><div class="form-group"><h1><i class="fas fa-cart-arrow-down"></i></h1 ><span> Uppss, Your cart is blank</span><hr class="shadow"><a href="http://localhost/Bikes_CI/Home" class="btn btn-outline-primary shadow">Continues Shopping</a></div><div/><div/></div> ');
               $('.notFound').addClass('fade-in');
            }, 700)
         }
      }
   })
})

$(document).on('click', '.hapus', function (e) {
   e.preventDefault();
   const id = this.dataset.id;
   const el = this.parentElement.parentElement.parentElement.parentElement;
   const email = $('.email').val();
   $.ajax({
      url: `http://localhost/Bikes_CI/Cart/deleteCart?id=${id}&email=${email}`,
      success: data => {
         if (data == 0) {
            el.classList.add('remove-item');
            setTimeout(() => {
               el.remove();
               $('section').html('<div class="container notFound"><div class="row"><div class="col-lg-12"><div class="form-group"><h1><i class="fas fa-cart-arrow-down"></i></h1 ><span> Uppss, Your cart is blank</span><hr class="shadow"><a href="http://localhost/Bikes_CI/Home" class="btn btn-outline-primary shadow">Continues Shopping</a></div><div/><div/></div> ');
               $('.notFound').addClass('fade-in');
            }, 700)
         } else {
            el.classList.add('remove-item');
            setTimeout(() => {
               el.remove();
            }, 700)
         }
      }
   })
})


$('.checkAll').on('click', function () {
   const checkAllboxes = document.querySelectorAll('.checked');
   let add = 0;
   for (var i = 0; i < checkAllboxes.length; i++) {
      if (this.checked) {
         checkAllboxes[i].checked = true;
         if (checkAllboxes[i].checked) {
            add += parseInt(checkAllboxes[i].value);
         }
         var bilangan = add;
         var reverse = bilangan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
         ribuan = ribuan.join('.').split('').reverse().join('');

         $('.totalHarga').html(ribuan);
      } else {
         checkAllboxes[i].checked = false;
         $('.totalHarga').html(0);
      }
   }
})

