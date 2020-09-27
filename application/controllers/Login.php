<?php

class Login extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'signIn';
      $data['css'] = 'signIn.css';
      $data['script'] = 'signIn.js';
      $this->load->view('Templates/header', $data);
      $this->load->view('Login/index');
      $this->load->view('Templates/footer', $data);
   }
}
