<!-- Navbar -->
<nav class="navbar navbar1 navbar-expand-lg navbar-light fixed-top">
   <div class="container">
      <a class="navbar-brand" href="">Bikes</a>

      <div class="navbar-nav navbar-nav1">
         <!-- <?php $email = $session['email']; ?>

         <?php if (empty($email)) : ?>
            <?php else : ?>
            <a class="nav-item nav-link linkEffect" href="<?= base_url('Profile'); ?>">You</a>
         <?php endif; ?> -->
               <a class="nav-item nav-link linkEffect" href="<?= base_url('Login'); ?>">Sign In</a>
         <a class="nav-item nav-link cart" style="position: relative;" href="Cart/index.html">
            <i class="fas fa-shopping-cart">
               <span>0</span>
            </i>
         </a>
      </div>
   </div>
</nav>


<nav class="navbar navbar2 navbar-expand-lg navbar-light bg">
   <div class="container">
      <form action="">
         <input class="form-control" type="search" placeholder="Search Product.." aria-label="Search" id="Seacrh">
      </form>

      <!-- Hamburger -->
      <div class="hamburger-menu">
         <div class="bar"></div>
      </div>
      <!-- Akhir -->

      <div class="navbar-nav navbar-nav2">
         <a class="nav-item nav-link linkEffect2 scroll" href="#Home">Home</a>
         <a class="nav-item nav-link linkEffect2" href="Help/index.html">Help</a>
         <a class="nav-item nav-link linkEffect2 scroll" href="#Client">Client Say</a>
         <a class="nav-item nav-link linkEffect2 scroll" href="#Kategori">Categories</a>
         <a class="nav-item nav-link linkEffect2 scroll" href="#About">About Us</a>
      </div>
   </div>
</nav>

<div class="navbarResponsive">
   <div class="form-inline" style="position: relative;">
      <a class="nav-item nav-link">Menu</a>
      <div class="hamburger-menu2">
         <div class="bar2"></div>
      </div>
   </div>

   <a class="nav-item nav-link linkEffect2 scroll2" href="#Home">Home</a>
   <a class="nav-item nav-link linkEffect2" href="Help/index.html">Help</a>
   <a class="nav-item nav-link linkEffect2 scroll2" href="#Client">Client Say</a>
   <a class="nav-item nav-link linkEffect2 scroll2" href="#Kategori">Categories</a>
   <a class="nav-item nav-link linkEffect2 scroll2" href="#About">About Us</a>
</div>
<!-- Akhir Navbar -->

<!-- Carousel -->
<div class="container-fluid CCarousel p-5">
   <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
         <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
               <li data-target="#carouselExampleCaptions" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" style="position: relative;">
               <div class="carousel-item" data-interval="2500">
                  <img src="<?= base_url('asset/foto4.jpg'); ?>" class="d-block w-100 img-fluid">
                  <div class="carousel-caption d-md-block">
                     <h1 class="display-4">Quality products, <span>fast</span><br> and <span>safe</span> with us.
                     </h1>
                     <a class="check scroll2" href="#Content">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        check more
                     </a>
                  </div>
               </div>
               <div class="carousel-item active carousel-item-left" data-interval="2500">
                  <img src="<?= base_url('asset/foto3.jpg'); ?>" class="d-block w-100">
                  <div class="carousel-caption d-md-block">
                     <h1 class="display-4">Quality products, <span>fast</span><br> and <span>safe</span>
                        with us.
                     </h1>
                     <a class="check check2 text-dark scroll2" href="#Content">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        check more
                     </a>
                  </div>
               </div>
               <div class="carousel-item carousel-item-next carousel-item-left " data-interval="2500">
                  <img src="<?= base_url('asset/foto6.jpg'); ?>" class="d-block w-100">
                  <div class="carousel-caption d-md-block">
                     <h1 class="display-4">Quality products, <span>fast</span><br> and <span>safe</span> with us.
                     </h1>
                     <a class="check scroll2" href="#Content">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        check more
                     </a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 Gambar2">
         <div class="row">
            <div class="col-12 mb-1 gForm" style="position: relative;">
               <img src="<?= base_url('asset/foto6.jpg'); ?>" class="img-fluid">
               <div class="form-group">
                  <p>Branded Bikes diskon 80%</p>
               </div>
            </div>
            <div class="col-12 gForm2" style="position: relative;">
               <img src="<?= base_url('asset/foto4.jpg'); ?>" class="img-fluid">
               <div class="form-group">
                  <p>Branded Bikes diskon 80%</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Akhir Carousel -->

<!-- Description -->
<div class="container">
   <div class="row CDescription">
      <div class="col-12 text-center Description">
         <h2 class="mb-4">The Store Bikes</h2>
         <p>All the bikes here are of high quality and durable and guaranteed.<br> what are you waiting for, please
            check if the item is purchased by another</p>
      </div>
   </div>
</div>
<!-- Akhir Description -->


<!-- Kategories -->
<section id="Kategori">
   <div class="container CCategories">
      <div class="row CKategori" style="position: relative;">
         <div class="col-lg-4 BidangKotak2">
            <h2 class="Kategories">Categories</h2>
         </div>

         <div class="col-lg-8 TKategori p-0">
            <div class="wrapperCategories">
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
               <div class="contentKategori text-center">
                  <span>Sepeda Balap</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Akhir Kategories -->

<!-- Product -->
<div class="container mt-5" id="Content">
   <div class="row text-center CTitle" style="position: relative;">
      <div class="col-12 Bidangkotak">
         <h2 class="ourProduct text-shadow"><span>O</span>ur <span>P</span>roduct</h2>
      </div>
   </div>
</div>

<div class="container" style="position:relative;">

   <div class="row contentProduk notFoundProduk">
      <div class=" grid">
         <div class="grid__item">
            <div class="slider">
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda1.jpg'); ?>"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda1.jpg'); ?>"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda1.jpg'); ?>"></div>
            </div>

            <div class="meta">
               <h3 class="meta__title">Sepeda Gunung</h3>
               <span class="meta__brand">Dummy Brand</span>
               <span class="meta__price">Rp 100.000</span>
            </div>

            <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
            <a href="Detail/detail.html" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </div>

         <div class="grid__item">
            <div class="slider">
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda2.jpg'); ?>" alt="Dummy" / style="background: none;"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda2.jpg'); ?>" alt="Dummy" /></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda2.jpg'); ?>" alt="Dummy" /></div>
            </div>

            <div class="meta">
               <h3 class="meta__title">Sepeda Gunung</h3>
               <span class="meta__brand">Dummy Brand</span>
               <span class="meta__price">Rp 100.000</span>
            </div>

            <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
            <a href="Detail/detail.html" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </div>

         <div class="grid__item">
            <div class="slider">
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda3.jpg'); ?>" alt="Dummy" / style="background: none;"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda3.jpg'); ?>" alt="Dummy" /></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda3.jpg'); ?>" alt="Dummy" /></div>
            </div>

            <div class="meta">
               <h3 class="meta__title">Sepeda Gunung</h3>
               <span class="meta__brand">Dummy Brand</span>
               <span class="meta__price">Rp 100.000</span>
            </div>

            <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
            <a href="Detail/detail.html" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </div>

         <div class="grid__item">
            <div class="slider">
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda4.jpg'); ?>" alt="Dummy" / style="background: none;"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda4.jpg'); ?>" alt="Dummy" /></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/Sepeda4.jpg'); ?>" alt="Dummy" /></div>
            </div>

            <div class="meta">
               <h3 class="meta__title">Sepeda Gunung</h3>
               <span class="meta__brand">Dummy Brand</span>
               <span class="meta__price">Rp 100.000</span>
            </div>

            <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
            <a href="Detail/detail.html" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </div>

         <div class="grid__item">
            <div class="slider">
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/images.jpg'); ?>" alt="Dummy" / style="background: none;"></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/images.jpg'); ?>" alt="Dummy" /></div>
               <div class="slider__item grabbable"><img src="<?= base_url('asset/FotoProduct/images.jpg'); ?>" alt="Dummy" /></div>
            </div>

            <div class="meta">
               <h3 class="meta__title">Sepeda Gunung</h3>
               <span class="meta__brand">Dummy Brand</span>
               <span class="meta__price">Rp 100.000</span>
            </div>

            <button class="action action--button action--buy"><i class="fas fa-heart"></i></button>
            <a href="Detail/detail.html" class="detail"><i class="fas fa-long-arrow-alt-right"></i>Detail</a>
         </div>

      </div>
   </div>

   <div class="row RLoad">
      <div class="col-12 text-center">
         <a href="#" class="btn btn-outline-info shadow Load">Load More</a>
      </div>
   </div>

   <div class="row" style="position: relative;">
      <div class="col-12 loader m-auto justify-content-center align-center">
         <div class="circle"></div>
         <div class="circle"></div>
         <div class="circle"></div>
      </div>
   </div>
</div>
<!-- Akhir Product -->

<!-- About -->
<section id="About">
   <div class="container rAbout mt-5">
      <div class="row" style="position: relative;">
         <div class="col-lg-6 col-md-12 col-sm-12 Foto mb-5">
            <img src="<?= base_url('asset/foto6.jpg'); ?>">
         </div>

         <div class="col-lg-6 col-md-12 col-sm-12 Body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio odit officiis culpa, necessitatibus
               laboriosam, eos deleniti ad asperiores, magnam suscipit minima autem et nihil delectus molestiae
               repellat voluptas dolorem ut.</p>
            <a href="#">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               About Us
            </a>
         </div>
      </div>
   </div>
</section>
<!-- Akhir About -->

<!-- Testimonial -->
<section id="Client">
   <div class="container-fluid p-5 mt-5" style="position: relative;">
      <div class="row Testimonial mb-4">
         <div class="col-lg-12 text-center">
            <div class="form-group" style="position: relative;">
               <h2>Client say</h2>
            </div>
         </div>
      </div>

      <div class="row text-center rTestimonial justify-content-center center">
         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Me.jpg'); ?>" class="img-fluid rounded-circle Me">
               <span>Fatah Noer</span>
               <h5>Full Stack Developer</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>
         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Hotman.jpg'); ?>" class="img-fluid rounded-circle">
               <span>Faris Kamaludin</span>
               <h5>Designer & Mobile Apps</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>
         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Dastin.jpg'); ?>" class="img-fluid rounded-circle">
               <span>Dastin Kurniawan</span>
               <h5>Ahli Bidang Bahasa</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>
         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Tongkol.jpg'); ?>" class="img-fluid rounded-circle">
               <span>Tongkol</span>
               <h5>CEO PT.Angkasa Fakboy</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>
         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Mylove.jpg'); ?>" class="img-fluid rounded-circle">
               <span>My Love</span>
               <h5>CEO My Love</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>

         <div class="col-lg-6 p-5">
            <div class="form-group">
               <img src="<?= base_url('asset/Mylove2.jpg'); ?>" class="img-fluid rounded-circle">
               <span>My Love</span>
               <h5>CEO My Love</h5>
               <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur officia quas incidunt
                  impedit fugit quo totam doloribus velit, voluptate deleniti accusamus minus laboriosam, beatae ipsa
                  deserunt maiores iure exercitationem!"</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Akhir Testimonial -->

<!-- Footer -->
<div class="container-fluid Footer">
   <div class="row">
      <div class="col-12 text-center">
         <p>Copyright © 2020 Fatah. All Rights Reserved.</p>
      </div>
   </div>
</div>
<!-- Akhir Footer -->