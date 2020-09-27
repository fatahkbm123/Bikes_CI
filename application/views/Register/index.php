<!-- Navbar -->
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
         <form>
            <div class="form-group">
               <label for="Username">Username</label>
               <input type="text" class="form-control shadow-sm" id="Username" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" class="form-control shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
            </div>
            <div class="form-group Password" style="position: relative;">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control shadow-sm password" id="exampleInputPassword1">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
               <i class="fas fa-eye-slash Show"></i>
            </div>

            <div class="form-group Password" style="position: relative;">
               <label for="exampleInputPassword2">Repeat Password</label>
               <input type="password" class="form-control shadow-sm password2" id="exampleInputPassword2">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-danger btn-block shadow-sm">Create Account!</button>
            </div>
         </form>
      </div>
   </div>
</div>