<?php

class Cart extends CI_Controller
{
   public function index()
   {
      $data['judul'] = 'Keranjang';
      $data['css'] = 'cart.css';
      $data['script'] = 'cart.js';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('Templates/header', $data);
      $this->load->view('Cart/index', $data);
      $this->load->view('Templates/footer', $data);
   }

   public function loadCart()
   {
      $data = $this->db->get_where('cart', ['email' => $this->input->get('email')])->result_array();
      if ($this->db->get_where('cart', ['email' => $this->input->get('email')])->num_rows() > 0) {
         echo json_encode($data);
      } else {
         echo true;
      }
   }
}
