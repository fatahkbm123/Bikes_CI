<?php
$ci = get_instance();

$data = $ci->db->get($this->input->post('query'))->result_array();

?>

<?php foreach ($data as $produk) : ?>
   <div class="grid__item">
      <div class="slider">
         <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="slider__item grabbable">
               <img src="<?= base_url('asset/FotoProduct/') . $produk['gambar'] ?>">
            </div>
         <?php endfor; ?>
      </div>

      <div class="meta">
         <h3 class="meta__title"><?= $produk['title']; ?></h3>
         <span class="meta__brand"><?= $produk['brand']; ?></span>
         <span class="meta__price"><?= number_format($produk['harga'], 0, ',', '.'); ?></span>
      </div>
      <?php if (!empty($email)) : ?>
         <form>
            <input type="hidden" class="id" value="<?= $produk['id']; ?>">
            <input type="hidden" class="gambar" value="<?= $produk['gambar']; ?>">
            <input type="hidden" class="title" value="<?= $produk['title']; ?>">
            <input type="hidden" class="hargaAwal" value="<?= $produk['harga']; ?>">
            <input type="hidden" class="hargaAkhir" value="<?= $produk['harga']; ?>">
            <input type="hidden" class="pcode" value="<?= $produk['pcode']; ?>">
            <input type="hidden" class="email" value="<?= $email; ?>">
            <input type="hidden" class="jmlProdukID" data-jmlproduk="<?= $produk['jmlProduk']; ?>">


            <?php if ($produk['jmlProduk'] < 1) : ?>
               <p class="textHabis">Stock Habis</p>
            <?php else : ?>
               <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
               <a href="<?= base_url('Detail/index/') . $produk['id'] ?>" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </form>
      <?php endif ?>
   <?php else : ?>
      <a href="<?= base_url('Login'); ?>" class="action2 action--button action--buy"><i class="fas fa-heart"></i></a>
      <a href="<?= base_url('Login'); ?>" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
   <?php endif; ?>
   </div>
<?php endforeach; ?>