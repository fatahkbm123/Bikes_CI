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
      $data['product'] = $this->db->get('product')->result_array();
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
      // $this->session->set_flashdata();
      redirect('Home');
   }
}
