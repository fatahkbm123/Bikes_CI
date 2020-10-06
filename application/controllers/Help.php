<?php

class Help extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Help Bikes';
      $data['css'] = 'help.css';
      $this->load->view('Templates/header', $data);
      $this->load->view('Help/index', $data);
   }
}
