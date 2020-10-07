<?php

class forgotPassword extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Forgot Password';
      $data['css'] = 'forgotPassword.css';

      $this->form_validation->set_rules('email', 'Email', 'valid_email|required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('Templates/header', $data);
         $this->load->view('forgotPassword/index');
      } else {
         $this->_forgotPassword();
      }
   }

   private function _forgotPassword()
   {
      $email = $this->input->post('email');
      $userEmail = $this->db->get_where('users', ['email' => $email, 'is_active' => 1])->row_array();

      if ($userEmail) {
         $token = base64_encode(random_bytes(32));
         $data = [
            'email' => $email,
            'token' => $token,
            'date_create' => time()
         ];

         $this->_sendEmail($token, 'forgotPassword', $email);

         $this->db->insert('user_token', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Check Email for reset Password.
       </div>');
         redirect('forgotPassword');
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Reset Password failed, Wrong Email!!.
       </div>');
         redirect('forgotPassword');
      }
   }

   private function _sendEmail($token, $type, $email)
   {
      $config = [
         'protocol' => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_user' => 'admbikers123@gmail.com',
         'smtp_pass' => 'akucintakamu',
         'smtp_port' => 465,
         'mailtype' => 'html',
         'charset' => 'utf-8',
         'newline' => "\r\n",
      ];

      $message =
         '<div style="text-align: center; padding: 30px;">
            <div style="position: relative">
            <h3 style="text-transform: uppercase;
                      font-size: 30px;
                      margin-inline-start: none;
                      margin-inline-end: none;">
               Bikes
            </h3>
            <p style="position: absolute; top: -10px">Welcome to Bikes Shop!</p>
            </div>
            <div style="color: grey;
                        margin-bottom: 18px;
                        font-weight: bold;">
            <p style="margin-bottom: -2px;">Dear : ' . $email . '</p>
            <p>Click reset for Reset Password</p>
            </div>
            <div>
               <a href="' . base_url() . 'forgotPassword/resetPassword?email=' . $email . '&token=' . urlencode($token) . '" 

               style="width: 100%;
                      color: white;
                      background: #1641ff;
                      border-radius: 20px;
                      padding: 8px 50px;
                      text-decoration: none !important;
                      font-weight: bold;
                      box-shadow: 0 15px 10px -15px #1641ff;">
               Reset</a>
            </div>
         </div>';

      $this->load->library('email');
      $this->email->initialize($config);

      $this->email->from('admbikers123@gmail.com', 'Admin Bikers');
      $this->email->to($email);

      if ($type == 'forgotPassword') {
         $this->email->subject('Reset Password');
         $this->email->message($message);
      }

      if ($this->email->send()) {
         return true;
      } else {
         echo $this->email->print_debugger();
         die;
      }
   }

   public function resetPassword()
   {
      $email = $this->input->get('email');
      $token = $this->input->get('token');

      $users = $this->db->get_where('users', ['email' => $email])->row_array();
      if ($users) {
         $user_token = $this->db->get_where('user_token', ['token' => $token]);
         if ($user_token) {
            $this->session->set_userdata('reset_password', $email);
            $this->changePassword();
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset Password failed, Wrong Token!.
          </div>');
            redirect('forgotPassword');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Reset Password failed, Wrong Email!.
       </div>');
         redirect('forgotPassword');
      }
   }

   public function changePassword()
   {
      if (!$this->session->userdata('reset_password')) {
         redirect('forgotPassword');
      }
      $data['judul'] = 'Reset Password';
      $data['css'] = 'forgotPassword.css';

      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]');
      $this->form_validation->set_rules('password2', 'Password2', 'required|trim|min_length[4]|matches[password1]');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('Templates/header', $data);
         $this->load->view('ChangePassword/index');
      } else {
         $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
         $email = $this->session->userdata('reset_password');

         $this->db->set('password', $password);
         $this->db->where('email', $email);
         $this->db->update('users');

         $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
               Password has been changed!
             </div>'
         );
         $this->session->unset_userdata('reset_password');
         redirect('Login');
      }
   }
}
