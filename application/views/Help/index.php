<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a href="<?= base_url('Home'); ?>" class="text-danger"><i class="fas fa-arrow-left"></i></a>

      <div class="navbar-nav ml-auto">
         <a class="navbar-brand">Bantuan</a>
      </div>
   </div>
</nav>

<div class="container" style="margin-top: 100px; ">
   <div class="row" style="position: relative;">
      <div class="col-lg-6 RPencarian p-0">
         <div class="form-group Pencarian">
            <h1 class="display-4">Hai!, Apa yang bisa kami bantu?</h1>

            <div class="formBox" style="position: relative;">
               <input type="text" class="form-control shadow-sm" placeholder="Cari...">

               <button class="search btn btn-primary">
                  <i class="fas fa-search"></i>
               </button>
            </div>
            <small>Contoh Topik: <b>Konfirmasi Pembayaran, Pesanan Belum Sampai</b></small>
         </div>

      </div>
      <div class="col-lg-6 banner p-0">
         <img src="<?= base_url('asset/banner.svg') ?>">
      </div>
   </div>

   <div class="container Menu">
      <div class="row mb-3">
         <div class="col-lg-12 text-center">
            <h1 class="judul judulMenu">Menu Bantuan</h1>
         </div>
      </div>

      <div class="row justify-content-center text-center p-0">
         <div class="col-lg-4 col-md-6 col-sm-12 p-2">
            <div class="card text-center">
               <div class="card-body" style="position: relative;">
                  <h4 class="judul">Pengajuan Komplain</h4>
                  <p>Kirim komplain sesuai masalah yang dihadapi lewat live chat atau form bantuan.</p>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 col-sm-12 p-2">
            <div class="card text-center">
               <div class="card-body">
                  <h4 class="judul">FAQ (Tanya Jawab)</h4>
                  <p>Punya pertanyaan? silahkan klik disini.</p>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 col-sm-12 p-2">
            <div class="card text-center">
               <div class="card-body">
                  <h4 class="judul">Riwayat Komplain</h4>
                  <p>Cek status atau lanjutkan komplain yang pernah kamu ajukan di sini.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid Footer">
   <div class="row">
      <div class="col-12 text-center">
         <p>Copyright © 2020 Fatah. All Rights Reserved.</p>
      </div>
   </div>
</div>

<!-- Akhir Navbar -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>