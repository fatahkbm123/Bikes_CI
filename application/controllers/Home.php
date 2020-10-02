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
      $data['product'] = $this->db->get('product', 3)->result_array();
      $data['carousel'] = ['asset/foto4.jpg', 'asset/foto3.jpg', 'asset/foto6.jpg'];
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
            'href' => 'Help/index.html',
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
      $data = [
         'email' => $this->input->post('email'),
         'gambar' => $this->input->post('gambar'),
         'title' => $this->input->post('title'),
         'hargaAwal' => $this->input->post('hargaAwal'),
         'hargaAkhir' => $this->input->post('hargaAkhir'),
         'qty' => 1,
      ];

      $productID = $this->db->get_where('product', ['id' => $this->input->post('id')])->row_array();
      $this->db->set('jmlProduk', $productID['jmlProduk'] - 1);
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('product');

      $users = $this->db->get_where('cart', ['title' => $this->input->post('title')])->row_array();

      if ($users['title'] == $this->input->post('title')) {
         $this->db->set('qty', $users['qty'] + 1);
         $this->db->where('title', $this->input->post('title'));
         $this->db->update('cart');

         echo "Berhasil diubah";
         return false;
      }

      $this->db->insert('cart', $data);
      echo "Berhasil ditambahkan!";
   }

   public function cartItem()
   {
      echo $this->db->get_where('cart', ['email' => $this->input->post('email')])->num_rows();
   }
}
