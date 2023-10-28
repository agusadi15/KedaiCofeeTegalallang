<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;1,100;1,200;1,300&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <!-- landing page start -->
      <div class="container">
    <!-- landing page start -->
    <div class="landing-page">
        <div class="navbar-menu">
          <div class="landing-page">
          <nav class="navbar">
    <?php
    $currentPage = "home"; 

    switch ($currentPage) {
        case "about":
            echo '<a href="#about" class="active">About us</a>';
            break;
        case "flavour":
            echo '<a href="flavour.php" class="active">Best flavour</a>';
            break;
        case "gallery":
            echo '<a href="gallery.php" class="active">Gallery</a>';
            break;
        case "reviews":
            echo '<a href="reviews.php" class="active">Reviews</a>';
            break;
        default:
            echo '<a href="#about">About us</a>';
            echo '<a href="#best">Best flavour</a>';
            echo '<a href="#gallery">Gallery</a>';
            echo '<a href="#reviews">Reviews</a>';
    }
    ?>
</nav>

    </div>

    <!-- landing page end -->
    <div class="content">
            <h1> KEDAI KOPI</h1>
            <p>
              Selamat datang di Kedai Kopi, tempat di mana kelezatan kopi bertemu dengan keramahan yang hangat. Kami adalah lebih dari sekadar kafe; kami adalah destinasi yang menyatu dalam kesempurnaan cita rasa dan pengalaman bersantai.
            </p>
            <button>contact us</button>
          </div>
        </div>
        <div class="hero">

        </div>
    </div>
</div>

    
      <!-- landing page end -->
      <!-- row start -->

  <div class="isi">
    <h1>WHY DO CUSTOMERS CHOOSE US</h1>
      
    <?php
    // Misalkan Anda memiliki array berisi judul-judul posting
    $postTitles = array("Kualitas Kopi Unggul"."Makanan Penutup dan Makanan Lainnya yang Lezat","Atmosfer yang Nyaman","Barista Berpengalaman","Pilihan Menu yang Luas","Pelayanan Pelanggan yang Prima");

    // Penggunaan perulangan while untuk menampilkan judul-judul posting
    $i = 0;
    while ($i < count($postTitles)) {
        // Anda dapat menambahkan lebih banyak elemen HTML atau konten di sini
        echo '<div class="menu-card">
             <h5>' . $postTitles[$i] . '</h5>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
          accusamus possimus blanditiis quaerat maiores nobis quod iusto
          doloribus libero mollitia.
        </p>
      </div>';
        $i++;
    }
    ?>

</div>

      <!-- row end -->
      <div class="garis"></div>
      <!-- about us start -->
      <div id="about" class="about-us">
        <div class="title">
          <h1>ABOUT US</h1>
          <p>
            Selamat datang di Kedai Kopi, tempat di mana kelezatan kopi bertemu dengan keramahan yang hangat. Kami adalah lebih dari sekadar kafe; kami adalah destinasi yang menyatu dalam kesempurnaan cita rasa dan pengalaman bersantai.
          </p>
        </div>
        <div class="images-card">
          <div class="card">
            <img src="img1.jpg" alt="" />
          </div>
          <div class="card-font">
            <div class="font">
              <h3>2000+</h3>
              <p>happy customer</p>
            </div>
            <div class="font">
              <h3>1000+</h3>
              <p>cofee was sold</p>
            </div>
            <div class="font">
              <h3>100+</h3>
              <p>shop opened</p>
            </div>
          </div>
          <div class="card">
            <img src="img2.jpg" alt="" />
          </div>
        </div>
      </div>
      <!-- about us end -->

      <div class="garis"></div>

      <!-- our menu start -->
      <div id="best" class="menu-page">
        <div class="menu-container">
          <div class="menu">
            <img src="coffe1.jpg" alt="" />
            <div class="price">
              <h3>Espresso</h3>
              <p>
                kopi hitam yang diseduh dengan tekanan tinggi, menghasilkan cairan kental dengan rasa yang kaya.
              </p>
              <h4>$6</h4>
            </div>
          </div>
          <div class="menu">
            <img src="coffe2.jpg" alt="" />
            <div class="price">
              <h3>Americano</h3>
              <p>menciptakan kopi hitam yang lebih ringan daripada espresso murni.</p>
              <h4>$7</h4>
            </div>
          </div>
          <div class="menu">
            <img src="coffe3.jpg" alt="" />
            <div class="price">
              <h3>Cappuccino</h3>
              <p>
              memiliki rasio espresso, susu, dan busa susu yang seimbang.
              </p>
              <h4>$3</h4>
            </div>
          </div>
          <div class="menu">
            <img src="coffe4.jpg" alt="" />
            <div class="price">
              <h3>Latte</h3>
              <p>
              Latte adalah minuman kopi yang terdiri dari espresso dan susu panas.
              </p>
              <h4>$10</h4>
            </div>
          </div>
          <div class="menu-button">
            <button>ORDER NOW</button>
          </div>
        </div> 
      </div>
      
      <div class="garis"></div>
      <!-- our menu end -->

<!-- penggunaan array pada foto -->
    <?php
      $foto = array(
        array("foto"=>"gambar1.jpg"),
        array("foto"=>"gambar2.jpg"),
        array("foto"=>"gambar3.jpg"),
        array("foto"=>"gambar1.jpg"),
        array("foto"=>"gambar2.jpg"),
        array("foto"=>"gambar3.jpg"),
      );

    ?>

      <!-- gallery start -->
      <div id="gallery" class="gallery">
        <div class="title-img"><h1>OUR GALLERY</h1></div>
        <div class="thamnail">
          <!-- penggunaan foreach pada php -->
        <?php foreach ($foto as $item): ?>
        <div class="gallery-item">
            <img src="<?php echo $item['foto']; ?>" alt="Gambar">
        </div>
    <?php endforeach; ?>
          </div>
        </div>
        <!-- review start -->
        <div class="garis"></div>
      <div id="reviews"class="review">
        <div class="review-title">
          <h1>OUR HAPPY COSTUMER</h1>
          <p>See what other people have to say about us</p>
        </div>
        <div class="core">
          <div class="review-card">
            <div class="gambar">
              <img src="img1.jpg" alt="" />
            </div>
            <div class="tulisan">
              <h4>My favorite cafe in bali</h4>
              <p>
              Saya baru-baru ini mengunjungi Cafe Coffee Delight dan saya sangat senang dengan pengalaman saya. 
              </p>
            </div>
          </div>
          <div class="review-card">
            <div class="gambar">
              <img src="img2.jpg" alt="" />
            </div>
            <div class="tulisan">
              <h4>My favorite cafe in bali</h4>
              <p>
              Cafe ini memiliki atmosfer yang sangat nyaman dan ramah pelanggan. Mereka menawarkan beragam kopi dan makanan penutup yang menggugah selera.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- review end -->
      <div class="garis"></div>

      <div class="lokasi">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63156.181258475975!2d115.27338391555689!3d-8.375935365239565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21f119be48789%3A0x5030bfbca831010!2sPupuan%2C%20Kec.%20Tegallalang%2C%20Kabupaten%20Gianyar%2C%20Bali!5e0!3m2!1sid!2sid!4v1683904638084!5m2!1sid!2sid"
          width="1190px"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>Tentang Kami</h4>
              <p>
                Kami adalah kedai kopi yang menyajikan kopi terbaik dengan
                kualitas premium. Dengan pengalaman bertahun-tahun dalam dunia
                kopi, kami berkomitmen untuk memberikan pengalaman kopi yang tak
                terlupakan bagi pelanggan kami.
              </p>
            </div>
            <div class="col-md-3">
              <h4>Alamat Kami</h4>
              <p>
                Jl. Raya Tegalalang No. 10<br />
                Bali, Indonesia
              </p>
            </div>
            <div class="col-md-3">
              <h4>Kontak Kami</h4>
              <p>Telepon: +62 123456789<br />Email: info@kedaikopi.com</p>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2023 Kedai Kopi. Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline text-right">
                <li class="list-inline-item">
                  <a href="#">Kebijakan Privasi</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Syarat & Ketentuan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
      <!-- gallery end -->
           
  </body>
</html>
