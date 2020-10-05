let loadCart = (function () {
   let items = '';
   $.ajax({
      url: 'http://localhost/Bikes_CI/Cart/loadCart?email=' + $('.email').val(),
      success: data => {
         const dataJson = JSON.parse(data);
         dataJson.forEach(cart => {
            console.log(cart);
            items += `<div class="row RCart"><div class="col-lg-7 CCart shadow-sm"><div class="form-inline" style="position: relative;"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck2"><label class="custom-control-label" for="customCheck2"></label></div><img src="http://localhost/Bikes_CI/asset/FotoProduct/${cart.gambar}" width="100"><span class="title">${cart.title}</span><div class="form-group"><a href="" class="hapus">Hapus</a></div><span class="ml-auto qty">${cart.qty}</span><span class="price">Rp ${cart.hargaAwal * cart.qty}</span></div></div></div>`;
            $('.Cart').html(items);
         })
      }
   })
})();