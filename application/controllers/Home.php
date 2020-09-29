<?php

class Home extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Home Bikers';
      $data['css'] = 'home.css';
      $data['script'] = 'home.js';
      $data['email'] = $this->session->userdata('email');
      $data['users'] = $this->db->get_where('users', ['email' => $data['email']])->row_array();

      $this->load->view('Templates/header', $data);
      $this->load->view('Home/index', $data);
      $this->load->view('Templates/footer', $data);
   }

   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');
      // $this->session->set_flashdata();
      redirect('Home');
   }
}
