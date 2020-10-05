<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home') ?>">Bikes</a>
   </div>
</nav>

<!-- CartProduk -->
<div class="container mt-5 RTitleProduk">
   <div class="row" style="position: relative;">
      <div class="col-lg-7 p-0">
         <h2>Keranjang Produk</h2>

         <div class=" form-inline Rpembayaran">
            <span class="ml-auto">Rp 100.000</span>
            <a href="<?= base_url('Checkout'); ?>" class="btn btn-danger">Pembayaran</a>
         </div>
      </div>
   </div>

   <div class="row mt-4">
      <div class="col-lg-7 RTitle shadow">
         <div class="form-inline">
            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input" id="customCheck1">
               <label class="custom-control-label" for="customCheck1">Pilih Semua <span>(1 barang
                     terpilih)</span></label>
            </div>
            <a href="" class="ml-auto mr-2 hapus">Hapus</a>
         </div>
      </div>

      <div class="col-lg-5">
         <div class="wrapper shadow">
            <div class="form-inline">
               <h3>Total Belanja</h3>
               <h4 class="ml-auto">Rp 0</h4>
            </div>
            <a href="<?= base_url('Checkout') ?>" class="btn btn-block btn-danger">Check Out</a>
         </div>
      </div>
   </div>
</div>

<div class="container Cart">

</div>
<!-- Akhir CartProduk -->

<!-- NotFound -->
<div class="container notFound">
   <div class="row">
      <div class="col-lg-12">
         <div class="form-group">
            <h1>
               <i class="fas fa-cart-arrow-down"></i>
            </h1>
            <span>Uppss, Your cart is blank</span>
            <hr class="shadow">
            <a href="../index.html" class="btn btn-outline-primary shadow">Continues Shopping</a>
         </div>
      </div>
   </div>
</div>
<!-- AKhir NotFound -->
<input type="hidden" class="email" value="<?= $email ?>">