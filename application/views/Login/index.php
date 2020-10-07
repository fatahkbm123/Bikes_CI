<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home'); ?>">Bikes</a>
   </div>
</nav>

<div class="container CForm">
   <div class="row text-center Title">
      <div class="col-12">
         <h1>Sign In</h1>
         <span>Dont Have Account? <a href="<?= base_url('Register'); ?>">Sign Up</a></span>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-5 col-md-7 col-xs-5 mx-auto">

         <?php if ($this->session->flashdata()) : ?>
            <div class="form-group text-center">
               <?= $this->session->flashdata('message'); ?>
            </div>
         <?php endif; ?>

         <form action="<?= base_url('Login'); ?>" method="POST">

            <?php if (form_error('email')) : ?>
               <div class="form-group error">
               <?php else : ?>
                  <div class="form-group">
                  <?php endif ?>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control shadow-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="form-text text-muted">', '</small>'); ?>
                  <i class="fas fa-exclamation-circle iconError"></i>
                  </div>

                  <?php if (form_error('password')) : ?>
                     <div class="form-group error">
                     <?php else : ?>
                        <div class="form-group">
                        <?php endif ?>
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control shadow-sm password" id="exampleInputPassword1" name="password" value="<?= set_value('email') ?>">
                        <?= form_error('password', '<small class="form-text text-muted">', '</small>'); ?>
                        <i class="fas fa-exclamation-circle iconError"></i>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-danger btn-block shadow-sm">Login</button>
                        </div>
                        <div class="form-group Forgot">
                           <a href="<?= base_url('forgotPassword'); ?>">Forgot Password?</a>
                        </div>
         </form>
      </div>
   </div>
</div>