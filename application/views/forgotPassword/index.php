<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a href="<?= base_url('Login'); ?>" class="text-danger arrow"><i class="fas fa-arrow-left"></i></a>

      <div class="navbar-nav ml-auto">
         <a class="navbar-brand">Forgot Password</a>
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

         <form action="" method="POST">
            <?php if (form_error('email')) : ?>
               <div class="form-group error">
               <?php else : ?>
                  <div class="form-group">
                  <?php endif ?>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" name="email" class="form-control shadow-sm" id="exampleInputEmail1">
                  <?= form_error('email', '<small id="emailHelp" class="form-text text-muted">', '</small>'); ?>
                  <i class="fas fa-exclamation-circle iconError"></i>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary shadow-sm">Reset Password</button>
         </form>
      </div>
   </div>
</div>
<div class="row justify-content-center text-center">
   <div class="col-lg-4 col-md-7 col-sm-7">
      <hr>
      <a href="<?= base_url('Login'); ?>">Back to login</a>
   </div>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>