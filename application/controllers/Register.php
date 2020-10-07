<?php

class Register extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      if($this->session->userdata('email')) {
         redirect('Home');
      }
      
      $data['judul'] = 'Sign Up';
      $data['css'] = 'signUp.css';
      $data['script'] = 'signUp.js';

      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
         'is_unique' => 'Email is already, please another email.'
      ]);
      $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]|min_length[4]', [
         'matches' => 'Password not match!'
      ]);
      $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password]|min_length[4]', [
         'matches' => 'Password not match!'
      ]);

      if ($this->form_validation->run() === FALSE) {
         $this->load->view('Templates/header', $data);
         $this->load->view('Register/index');
         $this->load->view('Templates/footer', $data);
      } else {
         $this->register();
      }
   }

   public function register()
   {
      // Insert user to table
      $username = ucfirst(htmlspecialchars($this->input->post('username', true)));
      $email = htmlspecialchars($this->input->post('email', true));
      $password = htmlspecialchars($this->input->post('password', true));

      $data = [
         'username' => $username,
         'email' => $email,
         'password' => password_hash($password, PASSWORD_DEFAULT),
         'image' => 'default.jpg',
         'is_active' => 0,
         'role_id' => 2,
         'date_create' => time()
      ];

      // Activated email
      $token = base64_encode(random_bytes(32));
      $user_token = [
         'email' => $email,
         'token' => $token,
         'date_create' => time()
      ];

      $this->db->insert('users', $data);
      $this->db->insert('user_token', $user_token);
      $this->_sendEmail($token, 'verify', $email);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Congratulations! your account has been created, please actived in email.
    </div>');
      redirect('Register');
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
            <p>Click active for verification Account!</p>
            </div>
            <div>
               <a href="' . base_url() . 'Register/verify?email=' . $email . '&token=' . urlencode($token) . '" 

               style="width: 100%;
                      color: white;
                      background: #1641ff;
                      border-radius: 20px;
                      padding: 8px 50px;
                      text-decoration: none !important;
                      font-weight: bold;
                      box-shadow: 0 15px 10px -15px #1641ff;">
               Active</a>
            </div>
         </div>';

      $this->load->library('email');
      $this->email->initialize($config);

      $this->email->from('admbikers123@gmail.com', 'Admin Bikers');
      $this->email->to($email);

      if ($type == 'verify') {
         $this->email->subject('Account Verification');
         $this->email->message($message);
      }

      if ($this->email->send()) {
         return true;
      } else {
         echo $this->email->print_debugger();
         die;
      }
   }

   public function verify()
   {
      $email = $this->input->get('email');
      $token = $this->input->get('token');

      $users = $this->db->get('users', ['email' => $email])->row_array();

      // Jika ada user
      if ($users) {
         $users_token = $this->db->get('user_token', ['token' => $token])->row_array();
         // Jika token itu sama
         if ($users_token) {
            // Jika token itu lebih dari 1 hari
            if (time() - $users_token['date_create'] < (60 * 60 * 24)) {
               $this->db->set('is_active', 1);
               $this->db->where('email', $email);
               $this->db->update('users');

               $this->db->delete('user_token', ['email' => $email]);

               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               ' . $email . ' has been activated! Please login.</div>');
               redirect('Register');
            } else {
               // Expired
               $this->db->delete('users', ['email' => $email]);
               $this->db->delete('user_token', ['email' => $email]);

               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Token expired!.
             </div>');
               redirect('Register');
            }
         } else {
            // Jika token itu tidak sama
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Account activated is failed, wrong token.
          </div>');
            redirect('Register');
         }
      } else {
         // Jika user itu tidak sama
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Account activated is failed, wrong email.
       </div>');
         redirect('Register');
      }
   }
}
