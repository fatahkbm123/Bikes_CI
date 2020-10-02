<?php

class detail extends CI_Controller
{
   public function index($id)
   {
      $data['judul'] = 'Detail Product';
      $data['css'] = 'detail.css';
      $data['script'] = 'detail.js';
      $data['images'] = ['asset/FotoProduct/Sepeda2.jpg', 'asset/FotoProduct/Sepeda1.jpg'];
      $data['email'] = $this->session->userdata('email');
      $data['users'] = $this->db->get_where('users', ['email' => $data['email']])->row_array();
      $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();
      $this->load->view('Templates/header', $data);
      $this->load->view('Detail/index', $data);
      $this->load->view('Templates/footer', $data);
   }

   public function tambahCart()
   {
      $data = [
         'email' => $this->input->post('email'),
         'gambar' => $this->input->post('gambar'),
         'title' => $this->input->post('title'),
         'hargaAwal' => $this->input->post('hargaAwal'),
         'hargaAkhir' => $this->input->post('hargaAkhir'),
         'qty' => $this->input->post('jmlProduk'),
      ];

      $users = $this->db->get_where('cart', ['email' => $this->input->post('email')])->row_array();

      if ($this->input->post('title') == $users['title']) {
         $this->db->set('qty', $users['qty'] + $this->input->post('jmlProduk'));
         $this->db->where('title', $this->input->post('title'));
         $this->db->update('cart');

         echo 'Data berhasil diubah';
         return false;
      }

      $this->db->insert('cart', $data);
      echo 'Data berhasil ditambahkan!';
   }

   public function setQty()
   {

      $productID = $this->db->get_where('product', ['id' => $this->input->post('id')])->row_array();
      $data = [
         'jmlProduk' => $productID['jmlProduk'] -  $this->input->post('qty')
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('product', $data);

      if ($this->db->get('product')->num_rows()) {
         $result2 = $this->db->get_where('product', ['id' => $this->input->post('id')])->row_array();
         echo $result2['jmlProduk'];
      }
   }
}
