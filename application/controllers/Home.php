<?php

class Home extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Home Bikers';
      $data['css'] = 'home.css';
      $data['script'] = 'home.js';
      $data['session'] = $this->session->userdata();

      $this->load->view('Templates/header', $data);
      $this->load->view('Home/index', $data);
      $this->load->view('Templates/footer', $data);
   }
}
