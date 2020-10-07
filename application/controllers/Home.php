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
      $data['carousel'] = ['asset/FotoProduct/sepeda1.jpg', 'asset/FotoProduct/sepeda1.jpg', 'asset/FotoProduct/sepeda1.jpg'];
      $data['testimonial'] = [
         [
            'gambar' => 'asset/Me.jpg',
            'nama' => 'Fatah Noer',
            'about' => 'Full Stack Developer'
         ],
         [
            'gambar' => 'asset/Hotman.jpg',
            'nama' => 'Moh Faris',
            'about' => 'Designer & Mobile Apps'
         ],
         [
            'gambar' => 'asset/Dastin.jpg',
            'nama' => 'Dastin',
            'about' => 'Ahli Bidang Bahasa'

         ],
         [
            'gambar' => 'asset/Tongkol.jpg',
            'nama' => 'Tongkol',
            'about' => 'CEO PT.Angkasa Fakboy'
         ],
         [
            'gambar' => 'asset/Mylove.jpg',
            'nama' => 'Mylove',
            'about' => 'CEO My love'
         ],
         [
            'gambar' => 'asset/Mylove2.jpg',
            'nama' => 'Mylove2',
            'about' => 'CEO My love'
         ]
      ];
      $data['navbar2'] = [
         [
            'navbar' => 'Home',
            'href' => '#Home',
            'scroll' => 'scroll'
         ],
         [
            'navbar' => 'Help',
            'href' => 'Help',
            'scroll' => ''
         ],
         [
            'navbar' => 'Client say',
            'href' => '#Client',
            'scroll' => 'scroll'
         ],
         [
            'navbar' => 'Categories',
            'href' => '#Kategori',
            'scroll' => 'scroll'
         ],
         [
            'navbar' => 'About us',
            'href' => '#About',
            'scroll' => 'scroll'
         ],
      ];
      $data['rows'] = $this->db->get_where('cart', ['email' => $data['email']])->num_rows();
      $data['cart'] = $this->db->get_where('cart', ['email' => $data['email']])->result_array();
      $this->load->view('Templates/header', $data);
      $this->load->view('Home/index', $data);
      $this->load->view('Templates/footer', $data);
   }

   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');
      redirect('Home');
   }

   public function tambahCart()
   {
      // Set Qty
      $productID = $this->db->get_where('product', ['pcode' => $this->input->post('pcode')])->row_array();
      $this->db->set('jmlProduk', $productID['jmlProduk'] - 1);
      $this->db->where('pcode', $this->input->post('pcode'));
      $this->db->update('product');
      echo $productID['jmlProduk'];

      // Add Cart
      $users = $this->db->get_where('cart', ['pcode' => $this->input->post('pcode')])->row_array();
      if ($users['pcode'] == $this->input->post('pcode')) {
         $this->db->set('qty', $users['qty'] + 1);
         $this->db->set('hargaAkhir', $users['hargaAwal'] * ($users['qty'] + 1));
         $this->db->where('pcode', $this->input->post('pcode'));
         $this->db->update('cart');

         return false;
      }

      $data = [
         'email' => $this->input->post('email'),
         'gambar' => $this->input->post('gambar'),
         'title' => $this->input->post('title'),
         'hargaAwal' => $this->input->post('hargaAwal'),
         'hargaAkhir' => $this->input->post('hargaAkhir'),
         'qty' => 1,
         'pcode' => $this->input->post('pcode')
      ];

      $this->db->insert('cart', $data);
   }

   public function cartItem()
   {
      echo $this->db->get_where('cart', ['email' => $this->input->post('email')])->num_rows();
   }

   public function deleteCart()
   {
      $query = $this->db->delete('cart', ['id' => $this->input->post('id')]);
      $rows = $this->db->get_where('cart', ['email' => $this->input->post('email')])->num_rows();
      if ($query) {
         echo $rows;
      }
   }

   public function loadData()
   {
      $email = $this->input->post('email');
      $data = $this->db->get_where('cart', ['email' => $email])->result_array();
      foreach ($data as $cartProduct) {
         echo '<div class="content">
               <!-- nama gambar -->
               <img src="' . base_url('asset/FotoProduct/') . $cartProduct['gambar'] . '" width="50">
               <!-- nama produk -->
               <span>' . $cartProduct['title'] . '</span>
               <!-- jumlahnya -->
               <span class="jmlProduk ml-auto"><span>' . $cartProduct['qty'] . '</span>x</span>
               <!-- Aksi => hapus -->
               <a href="" class="hapusCart" data-id="' . $cartProduct['id'] . '">Hapus</a>
            </div>';
      }
   }

   public function Ajax()
   {
      $data['email'] = $this->input->post('email');
      $this->load->view('Ajax/index', $data);
   }

   public function itemProduct()
   {
      $data['email'] = $this->input->post('email');
      $this->load->view('Ajax/itemProduct', $data);
   }
}
