<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('Home'); ?>">Bikes</a>
      <div class="navbar-nav ml-auto">
         <a href="<?= base_url('Login'); ?>"><i class="fas fa-arrow-left"></i></a>
      </div>
   </div>
</nav>

<div class="container CForm">
   <div class="row text-center Title">
      <div class="col-12">
         <h1>Sign Up</h1>
         <span>Already have account? <a href="<?= base_url('Login'); ?>">Sign In</a></span>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-5 col-md-7 mx-auto">

         <?php if ($this->session->flashdata()) : ?>
            <div class="form-group text-center Message">
               <?= $this->session->flashdata('message'); ?>
            </div>
         <?php endif; ?>

         <form action="<?= base_url('Register'); ?>" method="POST">

            <?php if (form_error('username')) : ?>
               <div class="form-group error">
               <?php else : ?>
                  <div class="form-group">
                  <?php endif ?>
                  <label for="Username">Username</label>
                  <input type="text" class="form-control shadow-sm" id="Username" aria-describedby="emailHelp" name="username" value="<?= set_value('username'); ?>">
                  <?= form_error('username', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                  <i class="fas fa-exclamation-circle iconError"></i>
                  </div>

                  <?php if (form_error('email')) : ?>
                     <div class="form-group error">
                     <?php else : ?>
                        <div class="form-group">
                        <?php endif ?>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                        <i class="fas fa-exclamation-circle iconError"></i>
                        </div>

                        <?php if (form_error('password')) : ?>
                           <div class="form-group error Password" style="position: relative;">
                           <?php else : ?>
                              <div class="form-group Password" style="position: relative;">
                              <?php endif ?>
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control shadow-sm password" id="exampleInputPassword1" name="password" value="<?= set_value('password'); ?>">
                              <i class="fas fa-eye-slash Show"></i>
                              <?= form_error('password', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                              </div>

                              <?php if (form_error('password2')) : ?>
                                 <div class="form-group error">
                                 <?php else : ?>
                                    <div class="form-group">
                                    <?php endif ?>
                                    <label for="exampleInputPassword2">Repeat Password</label>
                                    <input type="password" class="form-control shadow-sm password2" id="exampleInputPassword2" name="password2" value="<?= set_value('password2'); ?>">
                                    <?= form_error('password2', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                                    <i class="fas fa-exclamation-circle iconError"></i>
                                    </div>

                                    <div class="form-group">
                                       <button type="submit" class="btn btn-danger btn-block shadow-sm">Create Account!</button>
                                    </div>
         </form>
      </div>
   </div>
</div>