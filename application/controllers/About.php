<?php

class About extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'About';
      $data['css'] = 'about.css';
      $this->load->view('Templates/header', $data);
      $this->load->view('About/index');
   }
}
