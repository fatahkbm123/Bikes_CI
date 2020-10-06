<?php

class Checkout extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }
   public function index()
   {
      $data['judul'] = 'Checkout';
      $data['css'] = 'checkout.css';
      $data['script'] = 'checkout.js';
      $this->form_validation->set_rules('username', 'Name', 'required|trim|min_length[5]|alpha', [
         'min_length' => 'The name is too short min 5',
         'required' => 'The name cannot be empty'
      ]);
      $this->form_validation->set_rules('alamat', 'Address', 'required|trim|min_length[8]', [
         'min_length' => 'The address is too short min 8',
         'required' => 'The address cannot be empty'
      ]);
      $data['dataCart'] = $this->db->get_where('checkdata', ['email' => $this->session->userdata('email')])->result_array();
      $data['email'] = $this->session->userdata('email');
      if ($this->form_validation->run() === FALSE) {
         $this->load->view('Templates/header', $data);
         $this->load->view('Checkout/index', $data);
         $this->load->view('Templates/footer', $data);
      } else {
         $this->_tambahCheckout();
      }
   }

   private function _tambahCheckout()
   {
      $data = [
         'name' => ucfirst(htmlspecialchars($this->input->post('username', true))),
         'address' => htmlspecialchars($this->input->post('alamat')),
         'cost' => $this->input->post('pembayaran'),
         'total' => $this->input->post('total')
      ];

      $this->db->insert('checkout', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thank you for shopping here.
      </div>');

      $this->db->delete('cart', ['email' => $this->input->post('email')]);
      $this->db->delete('checkdata', ['email' => $this->input->post('email')]);
      redirect('Checkout');
   }

   public function delete()
   {
      $this->db->empty_table('checkdata');
   }
}
