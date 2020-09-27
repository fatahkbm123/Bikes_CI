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
            <div class="form-group text-center">
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
<!-- 
<style>
   body {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100vh;
   }

   .Email {
      text-align: center;
      margin: auto;
      border: 1px solid black;
      font-weight: normal;
      padding: 30px;
      border-radius: 4px;
      box-shadow: 0 0 5px rgba(0, 0, 0, .2);
   }

   .header h3 {
      font-family: 'Anton';
      text-transform: uppercase;
      font-size: 35px;
      margin-top: -10px;
      margin-bottom: 5px;
   }

   h6 {
      margin-bottom: 20px;
   }

   p {
      margin-bottom: 0px;
   }

   .content {
      color: grey;
      margin-bottom: 15px;
      font-weight: bold;
   }

   a {
      width: 100%;
      color: white;
      background: #1641ff;
      border-radius: 20px;
      padding: 8px 50px;
      text-decoration: none !important;
      font-weight: bold;
      box-shadow: 0 15px 10px -15px #1641ff;
      transition: .3s linear;
   }

   
   a:hover {
      box-shadow: 0 15px 10px -12px #1641ff;
      color: white;
   }
</style>
<div class="Email">
   <div class="header">
      <h3>Bikes</h3>
      <h6>Welcome to Bikes Shop!</h6>
   </div>

   <div class="content">
      <p>Dear : muhammadfatah398@gmail</p>
      <span>Click active for verification Account!</span> <br>
   </div>
   <div class="btn">
      <a href="">Active</a>
   </div>
</div> -->