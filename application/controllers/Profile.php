<?php

class Profile extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('');
   }

   public function index()
   {
      $data['judul'] = 'Profile';
      $data['css'] = 'profile.css';
      $data['script'] = 'profile.js';
      $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('Templates/header', $data);
      $this->load->view('Profile/index', $data);
      $this->load->view('Templates/footer', $data);
   }

   public function changePassword()
   {
      $old = $this->input->get('old');
      $new = $this->input->get('new');

      $users = $this->db->get_where('users', ['email' => $this->input->get('email')])->row_array();
      if ($old == '') {
         echo '<div class="alert alert-danger" role="alert">
         Not valid!.
       </div>';
      } else if ($new == '') {
         echo '<div class="alert alert-danger" role="alert">
         Not valid!.
       </div>';
      } else if ($old != '' && $new != '') {
         if (password_verify($old, $users['password'])) {
            $newPassword = password_hash($new, PASSWORD_DEFAULT);
            $this->db->set('password', $newPassword);
            $this->db->where('email', $this->input->get('email'));
            $this->db->update('users');

            echo '<div class="alert alert-success" role="alert">
            Success Password is changed!.
          </div>';
         } else {
            echo '<div class="alert alert-danger" role="alert">
            Old password not valid!.
          </div>';
         }
      }
   }

   public function changeName()
   {
      if ($this->input->get('name') == '') {
         echo json_encode(['alert' => '<div class="alert alert-danger" role="alert">
         Not valid!.
       </div>']);
      } else {
         $this->db->set('username', $this->input->get('name'));
         $this->db->where('email', $this->input->get('email'));
         $this->db->update('users');
         echo json_encode(['alert' => '<div class="alert alert-success" role="alert">
         Success Name is changed!.
       </div>', 'name' => $this->input->get('name')]);
      }
   }

   public function editGambar()
   {
      $data = $this->db->get_where('users', ['email' => $this->input->post('email')])->row_array();

      $image_upload = $_FILES['image']['name'];

      if ($image_upload) {
         $config['upload_path']          = './asset/profile';
         $config['allowed_types']        = 'gif|jpg|png';
         $config['max_size']             = 2043;

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('image')) {
            $old_image = $data['image'];
            if ($old_image != 'default.jpg') {
               unlink(FCPATH . 'asset/profile/' . $old_image);
            }
            // $new_images = $this->upload->data('file_name');
            $this->db->set('image', $image_upload);
         } else {
            echo $this->upload->display_errors();
         }

         $this->db->where('email', $this->input->post('email'));
         $this->db->update('users');

         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Successfully updated image.
       </div>');
         redirect('Profile');
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Failed updated image.
       </div>');
         redirect('Profile');
      }
   }
}
