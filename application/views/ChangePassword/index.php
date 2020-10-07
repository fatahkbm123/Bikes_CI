<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a href="<?= base_url('Login'); ?>" class="text-danger arrow"><i class="fas fa-arrow-left"></i></a>

      <div class="navbar-nav ml-auto">
         <a class="navbar-brand">Reset Password</a>
      </div>
   </div>
</nav>

<div class="container CInput">
   <div class="row">
      <div class="col-lg-5 col-md-7 col-sm-10 mx-auto">
         <?php if ($this->session->flashdata()) : ?>
            <div class="form-group text-center Message">
               <?= $this->session->flashdata('message'); ?>
            </div>
         <?php endif; ?>

         <form action="<?= base_url('forgotPassword/changePassword'); ?>" method="POST">
            <?php if (form_error('password1')) : ?>
               <div class="form-group error">
               <?php else : ?>
                  <div class="form-group">
                  <?php endif ?>
                  <label for="exampleInputEmail1">New Password</label>
                  <input type="password" name="password1" class="form-control shadow-sm" id="exampleInputEmail1">
                  <?= form_error('password1', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                  <i class="fas fa-exclamation-circle iconError"></i>
                  </div>
                  <?php if (form_error('password2')) : ?>
                     <div class="form-group error">
                     <?php else : ?>
                        <div class="form-group">
                        <?php endif ?>
                        <label for="exampleInputEmail1">Repeat Password</label>
                        <input type="password" name="password2" class="form-control shadow-sm" id="exampleInputEmail1">
                        <?= form_error('password2', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                        <i class="fas fa-exclamation-circle iconError"></i>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary shadow-sm">Reset Password</button>
                        </div>
         </form>
      </div>
   </div>
</div>
</div>