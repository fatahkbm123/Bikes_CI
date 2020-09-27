<?php

class Register extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Sign Up';
      $data['css'] = 'signUp.css';
      $data['script'] = 'signUp.js';
      $this->load->view('Templates/header', $data);
      $this->load->view('Register/index');
      $this->load->view('Templates/footer', $data);
   }
}
