<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <header class="header">
    <div class="container">

      <div class="logo">
        <a href="index.html">
          <img src="assets/images/icon/logo.svg" alt="Logo Website" width="237" height="25">
        </a>
        
      </div>

      <div class="search">
        <input type="text" placeholder="Cari...">
      </div>

      <div class="account">
        <button href="#" id="account-btn"><img src="assets/images/icon/user-white.svg" alt=""></button>

        <div class="account-popup">
          <div class="info-account"><img src="assets/images/icon/user-white.svg" alt="">
          </div>
          <ul>
            <li class="send-writers"><a href="#">Kirim Tulisan</a></li>
            <li><a href="#">Notifikasi</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
 
      
      <!-- HAMBURGER -->
      <button class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- OVERLAY -->
      <div class="overlay" id="overlay"></div>

      <!-- MENU -->
      <div class="slide-menu" id="menu">

        <div class="menu-header">
          
          <button class="close-btn" id="closeBtn">✕</button>
        </div>
        <ul class="menu-list">
         
          <a href="" class="user"><img src="assets/images/icon/menu-user.svg" alt=""></a>
          <li class="has-submenu">
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-news.svg" alt=""></i>
               <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                News
               </a>
               <span class="arrow"></span>
            </div>

            <div class="submenu">
              <a href="kanal.php">Nasional</a>
              <a href="kanal.php">Metropolitan</a>
              <a href="kanal.php">Internasional</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-bisnis.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Bisnis
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Makro</a>
              <a href="kanal.php">Asuransi</a>
              <a href="kanal.php">Keuangan</a>
              <a href="kanal.php">Properti</a>
              <a href="kanal.php">Inspiratif</a>
              <a href="kanal.php">Ekopol</a>
              <a href="kanal.php">Energi</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-bola.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Bola
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Bola Indonesia</a>
              <a href="kanal.php">Liga Inggris</a>
              <a href="kanal.php">Liga Italia</a>
              <a href="kanal.php">Bola Dunia</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-sport.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Sport
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Raket</a>
              <a href="kanal.php">Balap</a>
              <a href="kanal.php">Arena</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-lifestyle.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Lifestyle
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Female</a>
              <a href="kanal.php">Male</a>
              <a href="kanal.php">Relationship</a>
              <a href="kanal.php">Food & Travel</a>
              <a href="kanal.php">Komunitas</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-entertainment.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Entertainment
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Gosip</a>
              <a href="kanal.php">Music</a>
              <a href="kanal.php">Fllm</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-tekno.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Tekno
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Internet</a>
              <a href="kanal.php">Gadget</a>
              <a href="kanal.php">Tekno</a>
              <a href="kanal.php">Saint</a>
              <a href="kanal.php">Game</a>
            </div>
          </li>
          <li>
            <div class="menu-link">
              <i><img src="assets/images/icon/menu-healt.svg" alt=""></i>
              <a href="kanal.php" class="menu-text" onclick="event.stopPropagation();">
                Healt
               </a>
              <span class="arrow"></span>
            </div>
            <div class="submenu">
              <a href="kanal.php">Women</a>
              <a href="kanal.php">Men</a>
              <a href="kanal.php">Parenting</a>
              <a href="kanal.php">Konsultasi</a>
            </div>
          </li>
          
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-foto.svg" alt=""></i><a href="kanal.php">Foto</a></div>
          </li>
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-video.svg" alt=""></i><a href="kanal.php">Video</a></div>
          </li>
          <li>
            <div class="menu-link"><i><img src="assets/images/icon/menu-opini.svg" alt=""></i><a href="kanal.php">Opini</a></div>
          </li>
        </ul>
        <ul class="regional mt-20">
          <li class="title">
            <a href="regional.php">Regional</a>
          </li>

          <li><a href="kanal.php">Jakarta</a></li>
          <li><a href="kanal.php">Jabar</a></li>
          <li><a href="kanal.php">Jatim</a></li>
          <li><a href="kanal.php">Jateng</a></li>
          <li><a href="kanal.php">Sumut</a></li>
          <li><a href="kanal.php">Banten</a></li>
          <li><a href="kanal.php">Sulsel</a></li>
          <li><a href="kanal.php">Bali</a></li>
          <li><a href="kanal.php">Sumsel</a></li>
          <li><a href="kanal.php">Jogja</a></li>
          <li><a href="kanal.php">Riau</a></li>
          <li><a href="kanal.php">Lampung</a></li>
          <li><a href="kanal.php">Kaltim</a></li>
          <li><a href="kanal.php">Kalbar</a></li>
          <li><a href="kanal.php">Sumbar</a></li>
          <li><a href="kanal.php">Bogor</a></li>
          <li><a href="kanal.php">Bekasi</a></li>
          <li><a href="kanal.php">Malang</a></li>
          <li><a href="kanal.php">Surakarta</a></li>
        </ul>
       
        <div class="menu-bottom">
          <p>Available On</p>
          <div class="menu-store">
            <div>
              <img src="assets/images/icon/playstore.svg" alt="">
            </div>
            <div>
              <img src="assets/images/icon/iosstore.svg" alt="">
            </div>
          </div>
         
        </div>
        
      </div>

  </header>

  <div class="menu-scroll">
    <div class="container">
      

      <div class="menu-wrapper">
        <a href="#">Nasional</a>
        <a href="#">Ekonomi</a>
        <a href="#">Bola</a>
        <a href="#">Otomotif</a>
        <a href="#">Entertainment</a>
        <a href="#">Tekno</a>
        <a href="#">Gaya Hidup</a>
        <a href="#" id="regional-btn">Regional</a>

        <div class="regional-popup" id="regional-popup">
          <div class="popup-content">
            <button class="close-popup" id="close-popup">&times;</button>
            <h3>Regional Daerah</h3>
            <ul>
              <li><a href="#">Jakarta</a></li>
              <li><a href="#">Jawa Barat</a></li>
              <li><a href="#">Jawa Tengah</a></li>
              <li><a href="#">Jawa Timur</a></li>
              <li><a href="#">Bali</a></li>
              <li><a href="#">Sumatera Utara</a></li>
              <li><a href="#">Kalimantan Selatan</a></li>
              <!-- Tambahkan daerah lain sesuai kebutuhan -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <section class="trending-menu">
  <div class="container">
    <div class="partner-logo">
      <img src="assets/images/icon-partner/bri.svg" alt="BRI">
      <img src="assets/images/icon-partner/kpu.svg" alt="KPU">
    </div>
    <div class="trending-wrapper">

      <!-- Icon + Judul -->
      <div class="trending-header">
        <img src="assets/images/icon/trending.svg" alt="Trending" class="trending-icon">
        <span class="trending-title">Trending</span>
      </div>

      <!-- Menu wrapper -->
      <div class="trending-slider-container">
        <button class="trending-prev">&#8249;</button>
        <div class="trending-slider">
          <div class="trending-item active">Bola</div>
          <div class="trending-item">Tennis</div>
          <div class="trending-item">Sepatu</div>
          <div class="trending-item">Indonesia</div>
          <div class="trending-item">Malaysia</div>
          <div class="trending-item">Piala Dunia</div>
          <div class="trending-item">Ekonomi</div>
          <div class="trending-item">Tekno</div>
          <div class="trending-item">Islam</div>
          <div class="trending-item">Kristen</div>
          <div class="trending-item">Budha</div>
        </div>
        <button class="trending-next">&#8250;</button>
      </div>

    </div>
  </div>
 </section>

 <section class="movie py-20">
  <div class="container">
    <div class="title">
      <h4>Tontonan Hari Ini</h4>
      <div class="title-line"></div>
    </div>

    <div class="swiper movieSwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/video-1.png" class="thumb-img">
            <i><img src="assets/images/icon/tiktok-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">News</h3>
            <h2><a href="">Apple Siap Berevolusi untuk menjadikan platform AI Terbaik</a></h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/video-2.png" class="thumb-img">
            <i><img src="assets/images/icon/youtube-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">Lifestyle</h3>
            <h2><a href="">Apple Siap Berevolusi untuk menjadikan platform AI Terbaik</a></h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/video-3.jpg" class="thumb-img">
            <i><img src="assets/images/icon/tiktok-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">Nasional</h3>
            <h2><a href="">Menkop Tak Mau Ambil Pusing Soal Impor Pikap untuk Koperasi Desa Merah Putih</a></h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/video-4.png" class="thumb-img">
            <i><img src="assets/images/icon/tiktok-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">Bisnis</h3>
            <h2><a href="">Membangun Kemandirian Emosional Lewat Buku Ternyata Bukan Kamu Rumahnya</a></h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/video-5.png" class="thumb-img">
            <i><img src="assets/images/icon/youtube-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">Bisnis</h3>
            <h2><a href="">Apple Siap Berevolusi untuk menjadikan platform AI Terbaik</a></h2>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="movie-thumb">
            <img src="assets/images/news/news-1.jpg" class="thumb-img">
            <i><img src="assets/images/icon/tiktok-mov.png" class="thumb-icon"></i>
            <span><img src="assets/images/icon/icon-play.png" class="thumb-icon"></span>
            <h3 class="mt-10">Bisnis</h3>
            <h2><a href="">Jejak Spiritual Sinead OConnor: Tukang Protes Gereja hingga Masuk Islam</a></h2>
          </div>
        </div>

      </div>

      <!-- Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
  </div>
 </section> 

<section class="headline-news py-20">
  <div class="container">

    <!-- Headline Utama -->
    <div class="main-news">
      <a href="detail.html">
        <img src="assets/images/news/news-2.jpg" alt="Apple AI">
        <p>News <span class="main-divider">| Ekonomi</span> 
          <span class="main-time">Senin, 24 November 2025 | 35 Menit</span>
        </p> 
        <h1>Apple Siap Berevolusi untuk menjadikan platform AI Terbaik</h1>
      </a>
    </div>

    <div class="side-news">
      
      <div class="small-news ">
        <a href="#">
          <img src="assets/images/news/news-3.jpg" alt="">
          
          <div class="small-content">
            <h2>News <span>| 35 Menit</span></h2>
            <h3>Kisah Spiritual Frederic Kanoute Mesin Gol Sevilla: Mualaf dan Jadi Penyelamat Masjid</h3>
          </div>

        </a>
      </div>

      <div class="small-news">
        <a href="#">
          <img src="assets/images/news/news-1.jpg" alt="">
          
          <div class="small-content">
            <h2>News <span>| 35 Menit</span></h2>
            <h3>5 Warna Lipstik Menyegarkan, Harga Murah hingga Bikin Wajah Tampak Lebih Muda</h3>
          </div>

        </a>
      </div>

       <div class="small-news">
        <a href="#">
          <img src="assets/images/news/news-4.jpg" alt="">
          
          <div class="small-content">
            <h2>News <span>| 35 Menit</span></h2>
            <h3>Penerimaan Bea Cukai Anjlok 14% Jadi Rp 22,6 Triliun di Januari 2026</h3>
          </div>

        </a>
      </div>

      <div class="small-news">
        <a href="#">
          <img src="assets/images/news/news-5.png" alt="">
          
          <div class="small-content">
            <h2>News <span>| 35 Menit</span></h2>
            <h3>IHSG Ditutup Menguat 1,2%</h3>
          </div>

        </a>
      </div>

    </div>

  </div>
</section>

<section>
  <div class="container">
    
  </div>
</section>


<section class="latest mt-30">
  <div class="container">
    <!-- Grid Kiri + Kanan -->
      <div class="latest-wrapper">
      <!-- KIRI -->
      <div class="latest-news">

        <div class="title">
          <h4>Terkini</h4>
          <div class="title-line"></div>
        </div>

        <div class="latest-items">
          <div class="latest-item">
            <img src="assets/images/news/news-3.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>
                <a href="">Membangun Kemandirian Emosional Lewat Buku Ternyata Bukan Kamu Rumahnya</a>
              </h3>
            </div>
          </div>

          <div class="latest-item">
            <img src="assets/images/news/news-2.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>Menkop Tak Mau Ambil Pusing Soal Impor Pikap untuk Koperasi Desa Merah Putih</h3>
            </div>
          </div>

          <div class="latest-item">
            <img src="assets/images/news/news-1.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>Industri Pangan dan Chef memberikan yang terbaik</h3>
            </div>
          </div>

          <div class="latest-item">
            <img src="assets/images/news/news-4.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>Jejak Spiritual Sinead OConnor: Tukang Protes Gereja hingga Masuk Islam</h3>
            </div>
          </div>

          <div class="latest-item">
            <img src="assets/images/news/news-4.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>Jejak Spiritual Sinead OConnor: Tukang Protes Gereja hingga Masuk Islam</h3>
            </div>
          </div>

          <div class="latest-item">
            <img src="assets/images/news/news-4.jpg" alt="">
            <div class="latest-content">
              <h2>News <span>| 35 Menit</span></h2>
              <h3>Jejak Spiritual Sinead OConnor: Tukang Protes Gereja hingga Masuk Islam</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- KANAN -->
      <div class="latest-side">
        <div class="title">
          <h4>Yoursay</h4>
          <div class="title-line"></div>
        </div>

        <div class="yoursay-items">
          <div class="yoursay-item">
            <img src="assets/images/news/news-5.png" alt="Opini 1">
            <div class="yoursay-text">
              <p>Opini: Kenaikan Harga Bahan Pokok Jadi Sorotan</p>
              <span>30 Menit</span>
            </div>
          </div>

          <div class="yoursay-item">
            <img src="assets/images/news/news-4.jpg" alt="Opini 2">
            <div class="yoursay-text">
              <p>Analisis: Tren Startup Teknologi di Indonesia 2026</p>
              <span>30 Menit</span>
            </div>
          </div>

          <div class="yoursay-item">
            <img src="assets/images/news/news-1.jpg" alt="Opini 2">
            <div class="yoursay-text">
              <p>Analisis: Tren Startup Teknologi di Indonesia 2026</p>
              <span>30 Menit</span>
            </div>
          </div>

           <div class="yoursay-item">
            <img src="assets/images/news/news-1.jpg" alt="Opini 2">
            <div class="yoursay-text">
              <p>Analisis: Tren Startup Teknologi di Indonesia 2026</p>
              <span>30 Menit</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="category mt-30">
  <div class="container">

    <!-- Judul -->
    <div class="title">
      <h4>Kasih Paham</h4>
      <div class="title-line"></div>
    </div>

    <!-- Grid Utama -->
    <div class="category-grid mt-30">

      <!-- Item Utama -->
      <div class="category-main">
        <div class="category-item large">
          <img src="assets/images/news/news-1.jpg" alt="Berita Utama">
          <h3>Kasih paham: Industri Pangan dan Chef wrong man lost the times?</h3>
        </div>
      </div>

      <!-- Item Sekunder 3 Baris -->
      <div class="category-secondary">
        <div class="category-item">
          <img src="assets/images/news/news-2.jpg" alt="Berita 1">
          <h4>Kasih paham: Industri Pangan dan Chef wrong man lost the times?</h4>
          <span>25 Menit Lalu</span>
        </div>
        <div class="category-item">
          <img src="assets/images/news/news-3.jpg" alt="Berita 2">
          <h4>Menkop Tak Mau Ambil Pusing Soal Impor Pikap untuk Koperasi Desa Merah Putih</h4>
          <span>25 Menit Lalu</span>
        </div>
        <div class="category-item">
          <img src="assets/images/news/news-4.jpg" alt="Berita 3">
          <h4>Kurniawan Dwi Yulianto Pimpin Seleksi Perdana 42 Pemain Timnas Indonesia U-17</h4>
          <span>25 Menit Lalu</span>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="content mt-30">
  <div class="container">
    <div class="content-news">
      <div class="content-news-partner">
        <div class="news-item">
          <a href="">
            <img src="assets/images/news/news-1.jpg" alt="">
            <h3 class="yoursay">Yoursay</h3>
            <h2>Apa Itu Ladang Gas South Pars? Pusat Energi Dunia yang Diserang Rudal Israel</h2>
          </a>
        
        </div>
        <div class="news-item">
          <a href="">
            <img src="assets/images/news/news-2.jpg" alt="">
            <h3 class="suarahijau">Suara Hijau</h3>
            <h2>Hilal Tak Terlihat, Warga Iran Bakal Rayakan Lebaran 2026 pada Sabtu 20 Maret</h2>
          </a>
        
        </div>
        <div class="news-item">
          <a href="">
            <img src="assets/images/news/news-2.jpg" alt="">
            <h3 class="localmedia">Localmedia</h3>
            <h2>Hilal Tak Terlihat, Warga Iran Bakal Rayakan Lebaran 2026 pada Sabtu 20 Maret</h2>
          </a>
        
        </div>
        <div class="news-item">
          <a href="">
            <img src="assets/images/news/news-2.jpg" alt="">
            <h3 class="liksc">Liks</h3>
            <h2>Hilal Tak Terlihat, Warga Iran Bakal Rayakan Lebaran 2026 pada Sabtu 20 Maret</h2>
          </a>
        
        </div>
      </div>
      <div class="content-news-ig mt-30">
        <img src="assets/images/icon/ig-plug.png">
      </div>
      
      <div class="content-category mt-30">
        <div class="title">
          <h4>Bisnis Ringkas</h4>
          <div class="title-line"></div>
        </div>
        <div>
          <div style="overflow-x:auto;">
            <h2 class="market-data">Market Data</h2>
              <div id="market"></div>
          </div>

        </div>
        
        <div class="category-featured mt-30">
          <div class="">
            <img src="assets/images/news/news-2.jpg" width="100%">
          </div>
          
          <div class="featured-content">
            <h3>News</h3>
            <h2>Berapa Gaji Arya Iwantoro di Inggris? Setuju Kembalikan Dana Beasiswa LPDP</h2>
            <span>35 Menit Yang Lalu</span>
          </div>
        </div>

        <div class="content-category-grid">
          <div class="category-item">
            <img src="assets/images/news/news-2.jpg">
            <h3>News <span>| 29 Maret 2025</span></h3>
            <h2>Bajaj Indonesia Perkuat Kolaborasi Lokal Bertajuk 'Bajaj Untuk Surakarta'</h2>
          </div>
          <div class="category-item">
            <img src="assets/images/news/news-2.jpg">
             <h3>News <span>| 29 Maret 2025</span></h3>
            <h2>Bajaj Indonesia Perkuat Kolaborasi Lokal Bertajuk 'Bajaj Untuk Surakarta'</h2>
          </div>
          <div class="category-item">
            <img src="assets/images/news/news-2.jpg">
             <h3>News <span>| 29 Maret 2025</span></h3>
            <h2>Snoop Dogg Bikin Heboh di Swansea City, Pelatih Lawan Spill Bau Tak Biasa di Lorong Stadion</h2>
          </div>
        </div>

      </div>

      <div class="content-section mt-30">
        <div class="title">
          <h4>Suara Mereka</h4>
          <div class="title-line"></div>
        </div>
        <div class="content-section-item">
          <img src="assets/images/icon/kevin.png">
          <h3>Kevin Hubner</h3>
          <h2><a href="">Snoop Dogg Bikin Heboh di Swansea City, Pelatih Lawan Spill Bau Tak Biasa di Lorong Stadion</a></h2>
        </div>
        <div class="content-section-item">
          <img src="assets/images/icon/justin.png">
          <h3>Kevin Hubner</h3>
          <h2><a href="">Game Marvel's Wolverine Rilis Tahun Ini, Bakal Debut sebelum GTA 6</a></h2>
        </div>
        <div class="content-section-item">
          <img src="assets/images/icon/andrew.png">
          <h3>Kevin Hubner</h3>
          <h2><a href="">Congrats IVE! BANG BANG Jadi Lagu K-pop Pertama di 2026 Raih Perfect All-Kill</a></h2>
        </div>
        
      </div>

      <div class="content-community mt-30 mb-30">
        <div class="title mt-10">
          <h4>Suara Hijau</h4>
          <div class="title-line"></div>
        </div>

        <div class="community-grid">
          <div class="community-item">
            <img src="assets/images/news/news-1.jpg">
            <div class="community-text">
              <h3>Tragedi Tual Jadi Alarm Keras: Brimob Didorong Kembali ke 'Khitah' High-Risk, Bukan Keamanan Rutin</h3>
              <span>35 Menit Lalu</span>
            </div>
          </div>

          <div class="community-item">
            <img src="assets/images/news/news-2.jpg">
            <div class="community-text">
              <h3>Tragedi Tual Jadi Alarm Keras: Brimob Didorong Kembali ke 'Khitah' High-Risk, Bukan Keamanan Rutin</h3>
              <span>35 Menit Lalu</span>
            </div>
          </div>

          <div class="community-item">
            <img src="assets/images/news/news-3.jpg">
            <div class="community-text">
              <h3>Nostalgia Ramadan: Keabadian Lagu 'Cinta Rasul' Sulis dan Haddad Alwi</h3>
              <span>35 Menit Lalu</span>
            </div>
          </div>

          <div class="community-item">
            <img src="assets/images/news/news-1.jpg">
            <div class="community-text">
              <h3>Judul Berita 6</h3>
              <span>35 Menit Lalu</span>
            </div>
          </div>

          <div class="community-item">
            <img src="assets/images/news/news-2.jpg">
              <div class="community-text">
                <h3>Sujarwo Dukung Calon Direktur KITB, Golkar Siak: Bukan Sikap Partai</h3>
                <span>35 Menit Lalu</span>
              </div>
          </div>

          <div class="community-item">
            <img src="assets/images/news/news-3.jpg">
            <div class="community-text">
              <h3>Judul Berita 6</h3>
              <span>35 Menit Lalu</span>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="content-side">
      <!-- Banner -->
      <img src="assets/images/banner/300x600.png" alt="Iklan Banner 300x600 Pikiran Rakyat">

      <!-- Side category / news list -->
      <div class="side-category">
        <h2>Diskusi Terpanas</h2>
        <div class="side-category-news">
          <span class="news-number">1</span>
          <div class="news-content">
            <h3 class="news-title">Lorem Ipsum is Dummy Text</h3>
            <div class="news-meta">
              <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
            </div>
          </div>
        </div>

        <div class="side-category-news">
          <span class="news-number">2</span>
          <div class="news-content">
            <h3 class="news-title">Dolor Sit Amet Consectetur</h3>
            <div class="news-meta">
             <div class="news-meta">
                <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
              </div>
              
            </div>
          </div>
        </div>

        <div class="side-category-news">
          <span class="news-number">3</span>
          <div class="news-content">
            <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
            <div class="news-meta">
              <div class="news-meta">
                <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
              </div>
                    
            </div>
          </div>
        </div>

        <div class="side-category-news">
          <span class="news-number">4</span>
          <div class="news-content">
            <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
            <div class="news-meta">
              <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
            </div>
          </div>
        </div>

         <div class="side-category-news">
          <span class="news-number">5</span>
          <div class="news-content">
            <h3 class="news-title">Snoop Dogg Bikin Heboh di Swansea</h3>
            <div class="news-meta">
              <img src="https://assets.suara.com/suara/desktop/images/icon/speech-bubble.png" width="15" height="auto"><span class="news-time">5</span>
            </div> 
          </div>
        </div>


        <!-- Tambahkan side-category-news lain sesuai kebutuhan -->
      </div>

      <div class="liks">
        <div class="title mt-10">
          <h4>Liks</h4>
          <div class="title-line"></div>
        </div> 

        <div class="liks-item">
          <img src="assets/images/news/news-1.jpg" alt="Berita Liks 1">

          <span class="liks-category">News</span>
          <h3 class="liks-title">Lorem Ipsum Is Dummy Text</h3>
          <span class="liks-time">35 Menit Lalu</span>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="foot-info">
  <div class="container">

    <div class="foot-grid">

      <div class="foot-logo">
        <img src="assets/images/logo-suara-white.png" width="200">
      </div>

      <div class="foot-col">
        <ul>
          <li><a href="#">Redaksi</a></li>
          <li><a href="#">Kontak</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Karir</a></li>
        </ul>
        <ul>
          <li><a href="#">Pedoman Media Siber</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Saran dan Kritik</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>

      <div class="foot-aps">
        <h4>Dapatkan Aplikasi Suara.com</h4>
        <div class="app-store-wrapper">
            <div class="app-store">
              <img src="assets/images/icon/playstore.svg" alt="Play Store">
            </div>
            <div class="app-store">
              <img src="assets/images/icon/iosstore.svg" alt="Ios Store">
            </div>
        </div>
        
      </div>

    </div>

  </div>
</section>
<div class="foot-network">
  <div class="container">
    <div class="foot-network-icon">
       <ul>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/arkadia.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/suara.svg" alt="Twitter">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/mata-mata.svg" alt="Instagram">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/bolatimes.svg" alt="YouTube">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/hitekno.svg" alt="YouTube">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/dewiku.svg" alt="YouTube">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/mobimoto.svg" alt="YouTube">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="assets/images/icon-partner/himedik.svg" alt="YouTube">
            </a>
          </li>
        </ul>
    </div>

    <div class="foot-sosmed">
      <ul>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-google.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-fb.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-thread.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-x.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-youtube.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-instagram.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/icon-sosmed/icon-tiktok.svg" alt="Facebook">
          </a>
        </li>
      </ul>
    </div>
  </div>
      
</div>
<!-- Bagian Bawah -->

<footer class="footer py-5">
  <div class="container">
    <p>© 2026 suara.com - All Rights Reserved.</p>
  </div>
</footer>

<div id="market"></div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");
const closeBtn = document.getElementById("closeBtn");

// OPEN
hamburger.onclick = () => {
  menu.classList.add("active");
  overlay.classList.add("active");
  hamburger.classList.add("active");
};

// CLOSE
function closeMenu() {
  menu.classList.remove("active");
  overlay.classList.remove("active");
  hamburger.classList.remove("active");
}

overlay.onclick = closeMenu;
closeBtn.onclick = closeMenu;

// SUBMENU
document.querySelectorAll(".menu-link").forEach(item => {
  item.onclick = function() {
    const parent = this.parentElement;

    document.querySelectorAll(".menu-list li").forEach(li => {
      if (li !== parent) li.classList.remove("open");
    });

    parent.classList.toggle("open");
  };
});
</script>

<script>
document.querySelectorAll('.has-submenu .menu-link').forEach(function(menu) {
  menu.addEventListener('click', function(e) {

    const rect = this.getBoundingClientRect();
    const clickX = e.clientX;

    if (clickX > rect.right - 60) {
      e.preventDefault(); 
      e.stopPropagation();

      const parent = this.closest('.has-submenu');

      document.querySelectorAll('.has-submenu').forEach(function(item) {
        if (item !== parent) item.classList.remove('active');
      });

      parent.classList.toggle('active');
    }
  });
});
</script>

<script>
var swiper = new Swiper(".movieSwiper", {
  slidesPerView: "auto",
  spaceBetween: 15,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

  const slider = document.querySelector('.trending-slider');
  const prev = document.querySelector('.trending-prev');
  const next = document.querySelector('.trending-next');

  if (!slider || !prev || !next) return;

  let position = 0;
  const step = 200;

  function updateButtons() {
    if (position >= 0) {
      prev.style.display = 'none';
    } else {
      prev.style.display = 'block';
    }

    // batas kanan (manual)
    const maxScroll = slider.scrollWidth - slider.parentElement.clientWidth;

    if (Math.abs(position) >= maxScroll) {
      next.style.display = 'none';
    } else {
      next.style.display = 'block';
    }
  }

  next.onclick = () => {
    const maxScroll = slider.scrollWidth - slider.parentElement.clientWidth;

    position -= step;

    if (Math.abs(position) > maxScroll) {
      position = -maxScroll;
    }

    slider.style.transform = `translateX(${position}px)`;
    slider.style.transition = '0.3s ease';

    updateButtons();
  };

  prev.onclick = () => {
    position += step;

    if (position > 0) {
      position = 0;
    }

    slider.style.transform = `translateX(${position}px)`;
    slider.style.transition = '0.3s ease';

    updateButtons();
  };

  // INIT
  updateButtons();

});

const accountBtn = document.getElementById('account-btn');
const account = document.querySelector('.account');

accountBtn.addEventListener('click', function(e) {
  e.stopPropagation();
  account.classList.toggle('active');
});

document.addEventListener('click', function() {
  account.classList.remove('active');
});
</script>

</body>
</html>
