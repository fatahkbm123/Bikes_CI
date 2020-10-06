<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home') ?>">Bikes</a>
   </div>
</nav>

<!-- CartProduk -->
<section>
   <div class="container mt-5 RTitleProduk">
      <div class="row" style="position: relative;">
         <div class="col-lg-7 p-0">
            <h2>Keranjang Produk</h2>

            <div class=" form-inline Rpembayaran">
               <span class="ml-auto">Rp <span class="totalHarga2">0</span></span>
               <a href="<?= base_url('Checkout'); ?>" class="btn btn-danger">Pembayaran</a>
            </div>
         </div>
      </div>

      <div class="row mt-4">
         <div class="col-lg-7 RTitle shadow">
            <div class="form-inline">
               <label>ALL PRODUCT</label>
               <a href="" class="ml-auto mr-2 hapusAll">Hapus</a>
            </div>
         </div>

         <div class="col-lg-5">
            <div class="wrapper shadow">
               <div class="form-inline">
                  <h3>Total Belanja</h3>
                  <h4 class="ml-auto">Rp<span class="totalHarga">0</span></h4>
               </div>
               <a href="<?= base_url('Checkout') ?>" class="btn btn-block btn-danger">Check Out</a>
            </div>
         </div>
      </div>
   </div>

   <div class="container Cart">

   </div>
   <!-- Akhir CartProduk -->
</section>
<!-- AKhir NotFound -->
<input type="hidden" class="email" value="<?= $email ?>">