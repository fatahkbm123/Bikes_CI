<?php

class Login extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $data['judul'] = 'signIn';
      $data['css'] = 'signIn.css';
      $data['script'] = 'signIn.js';

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('Templates/header', $data);
         $this->load->view('Login/index');
         $this->load->view('Templates/footer', $data);
      } else {
         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $users = $this->db->get_where('users', ['email' => $email])->row_array();
      // User ada
      if ($users) {
         // email itu active
         if ($users['is_active'] == 1) {
            // Password sama
            if (password_verify($password, $users['password'])) {
               // Success redirect to home, with some data per email
               $data = [
                  'email' => $users['email'],
                  'role_id' => $users['role_id']
               ];

               $this->session->set_userdata($data);
               redirect('Home');
            } else {
               // Jika password itu tidak sama
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password is wrong!.
          </div>');
               redirect('Login');
            }
         } else {
            // Jika email itu tidak aktif
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Email is not active!.
       </div>');
            redirect('Login');
         }
      } else {
         // Jika email itu tidak ada
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Email is not valid!.
       </div>');
         redirect('Login');
      }
   }
}
