<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home') ?>">Bikes</a>
      <div class="navbar-nav ml-auto">
         <a href="<?= base_url('Cart') ?>" class="arrow"><i class="fas fa-arrow-left"></i></a>
      </div>
   </div>
</nav>

<div class="container CForm">
   <div class="row Title">
      <div class="col-lg-5 col-md-7 mx-auto">

         <?php if ($this->session->flashdata()) : ?>
            <div class="form-group text-center Message">
               <?= $this->session->flashdata('message'); ?>
            </div>
         <?php endif; ?>

         <form action="" method="POST">
            <?php if (form_error('username')) : ?>
               <div class="form-group error">
               <?php else : ?>
                  <div class="form-group">
                  <?php endif ?>
                  <label for="Username">Your Name</label>
                  <input type="text" class="form-control shadow-sm" id="Username" aria-describedby="emailHelp" name="username" value="<?= set_value('username') ?>">
                  <?= form_error('username', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                  <i class="fas fa-exclamation-circle iconError"></i>
                  </div>
                  <?php if (form_error('alamat')) : ?>
                     <div class="form-group error">
                     <?php else : ?>
                        <div class="form-group">
                        <?php endif ?>
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?= set_value('alamat') ?>">
                        <?= form_error('alamat', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                        <i class="fas fa-exclamation-circle iconError"></i>
                        </div>

                        <div class="form-group">
                           <label for="exampleInputEmail1">Pembayaran</label>
                           <select class="custom-select shadow-sm" name="pembayaran">
                              <option value="BCA" selected>BCA</option>
                              <option value="BNI">BNI</option>
                              <option value="ATM">ATM</option>
                           </select>
                        </div>

                        <?php
                        $dataTotal = 0;
                        foreach ($dataCart as $data) :
                           $dataTotal += $data['total'];
                        ?>
                        <?php endforeach; ?>
                        <div class="form-group">
                           <label for="exampleInputEmail1">All Total</label>
                           <input type="text" disabled class="form-control shadow-sm" id="exampleInputEmail1" value="Rp. <?= number_format($dataTotal, 0, ',', '.'); ?>">
                        </div>

                        <input type="hidden" name="total" value="<?= $dataTotal; ?>">
                        <input type="hidden" name="email" value="<?= $email; ?>">

                        <div class="form-group">
                           <button type="submit" class="btn btn-danger btn-block shadow-sm">Check Out!</button>
                        </div>
         </form>
      </div>
   </div>
</div>