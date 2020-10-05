<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home'); ?>">Bikes</a>

      <div class="navbar-nav navbar-nav1">
         <?php if (isset($email)) : ?>
            <div class="navbar-nav navbar-nav1 align-items-center">
               <div class="UYE" style="position: relative;">
                  <a href="" class="nav-item nav-link btnUser" style="position: relative;">
                     <?= $users['username']; ?>
                     <img src="<?= base_url('asset/default.jpg'); ?>" class="gambarUser img-thumbnail rounded-circle" width="25">
                     <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                  </a>

                  <div class="userButton">
                     <a href="">Profile</a>
                     <a href="<?= base_url('Home/logout'); ?>">Logout</a>
                  </div>
               </div>
            <?php else : ?>
               <div class="navbar-nav navbar-nav1">
                  <a class="nav-item nav-link linkEffect" href="<?= base_url('Login'); ?>">Sign In</a>
               <?php endif; ?>
               <a class="nav-item nav-link cart" style="position: relative;" href="../Cart/index.html">
                  <i class="fas fa-shopping-cart KERANJANG">
                     <span id="cartItem"></span>
                  </i>
               </a>
               </div>
            </div>
</nav>

<input type="hidden" class="email" value="<?= $email; ?>">

<section class="p-2 bg-white Section mb-5 shadow">
   <div class="container mt-5 p-0" style="overflow: hidden;">

      <div class="row Isi">
         <!-- Gambar -->
         <div class="col-lg-4 col-md-6">
            <div class="form-group">
               <div class="formGroup slick jumbo" data-gambar="<?= $product['gambar']; ?>">
                  <img src="<?= base_url('asset/FotoProduct/') . $product['gambar'] ?>" class="img-fluid mb-5" width="100%" data-gambar="">
                  <img src="<?= base_url($images[0]); ?>" class="img-fluid mb-5" width="100%">
                  <img src="<?= base_url($images[1]); ?>" class="img-fluid mb-5" width="100%">
               </div>
            </div>
         </div>

         <!-- Content -->
         <div class="col-lg-8 col-md-6 p-2 Content">
            <div class="form-inline judul">
               <!-- Judul -->
               <h1 class="d-block mr-2" data-title="<?= $product['title']; ?>"><?= $product['title']; ?></h1>

               <span>(<?= $product['brand']; ?>)</span>
               <!-- Back -->
               <a href="<?= base_url('Home') ?>" class="ml-auto nav-item">
                  <i class="fas fa-angle-double-left fa-2x"></i>
               </a>
            </div>

            <div class="form-inline mt-2">
               <h5>
                  Rp <span data-harga="<?= $product['harga']; ?>" class="harga"><?= $product['harga']; ?></span>
                  <span>/-</span>
               </h5>
            </div>

            <!-- Kuantitas -->
            <div class="form-inline mt-3 formQty">
               <label>Kuantitas</label>

               <div>
                  <button type="button" class="btn btn-outline-secondary mr-1 ml-1 minus">-</button>
                  <input type="text" disabled class="form-control Qty mr-1 text-center" value="<?= $product['qty'] ?>">
                  <button type="button" class="btn btn-outline-secondary mr-3 plus">+</button>
               </div>

               <p class="text-secondary stock">Tersisa <span class="jmlProduk" data-jmlproduk="<?= $product['jmlProduk']; ?>"><?= $product['jmlProduk']; ?></span>
                  Produk
               </p>
            </div>

            <div class="form-group">
               <!-- Button Masukkan Keranjang -->
               <form>
                  <input type="hidden" class="harga2" value="<?= $product['harga'] ?>">
                  <input type="hidden" class="Qty2" value="<?= $product['qty'] ?>">
                  <input type="hidden" class="id" value="<?= $product['id'] ?>">

                  <div class="pBtn">
                     <button type="submit" class="btn btn-outline-primary p-2 mt-3 addProduct"><i class="fas fa-cart-plus">&nbsp;</i> Masukkan Keranjang</button>
                  </div>
               </form>
            </div>
            </form>
         </div>
      </div>
   </div>
</section>

<!-- Footer -->
<div class="container-fluid Footer">
   <div class="row">
      <div class="col-12 text-center">
         <p>Copyright © 2020 Fatah. All Rights Reserved.</p>
      </div>
   </div>
</div>
<!-- Akhir Footer -->