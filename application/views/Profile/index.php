<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a href="<?= base_url('Home'); ?>" class="text-danger arrow"><i class="fas fa-arrow-left"></i></a>

      <div class="navbar-nav ml-auto">
         <a class="navbar-brand">Profile</a>
      </div>
   </div>
</nav>

<div class="container-fluid p-5 CProfile shadow">
   <div class="row">
      <div class="col-lg-5">
         <div class="form-group text-center">
            <img src="<?= base_url('asset/') . $users['image'] ?>" width="50%" class="rounded-circle img-thumbnail shadow gambar">
         </div>
         <?= form_open_multipart('Profile/editGambar'); ?>
         <input type="hidden" class="email" value="<?= $users['email']; ?>" name="email">
         <div class="form-group img">
            <div class="custom-file">
               <input type="file" class="custom-file-input images" id="customFile" name="image">
               <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
         </div>
         <div class="form-group save">
            <button type="submit" name="submit" class="btn btn-danger">Save</button>
            </form>
         </div>
      </div>

      <div class="col-lg-7 mt-5">

         <div class="form-group text-center Message"></div>
         <?php if ($this->session->flashdata()) : ?>
            <div class="form-group text-center message">
               <?= $this->session->flashdata('message'); ?>
            </div>
         <?php endif; ?>

         <div class="form-group title">
            <h3>Profile</h3>
            <span>Beberapa mungkin tidak dapat diubah. <a href="#">Pelajari lebih lanjut</a></span>
         </div>

         <table class="table table-borderless">
            <tr style="border-bottom: 1px solid #b7b7b7" data-toggle="modal" data-target="#exampleModal2" class="name">
               <th>Name</th>
               <td><?= $users['username']; ?></td>
            </tr>

            <tr style="border-bottom: 1px solid #b7b7b7">
               <th>Email</th>
               <td><?= $users['email']; ?></td>
            </tr>

            <tr class="password">
               <th>Kata Sandi</th>
               <td class="pw">
                  <button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">Change Password</button>
               </td>
            </tr>
         </table>
      </div>
   </div>
</div>

<!-- Footer -->
<div class="container-fluid Footer">
   <div class="row">
      <div class="col-12 text-center">
         <p>Copyright © 2020 Fatah. All Rights Reserved.</p>
      </div>
   </div>
</div>

<!-- Modal Password-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="change">
               <div class="form-group">
                  <label>Old Password</label>
                  <input type="password" class="form-control old shadow-sm">
               </div>
               <div class="form-group">
                  <label>New Password</label>
                  <input type="password" class="form-control new shadow-sm">
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
         </div>
      </div>
   </div>
</div>

<div class="modal fade modal2" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="changeName">
               <div class="form-group">
                  <div class="form-group">
                     <label for="exampleInputEmail2">New Name</label>
                     <input type="text" class="form-control shadow-sm inputName" id="exampleInputEmail2" value="<?= $users['username']; ?>">
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
         </div>
      </div>
   </div>
</div>