<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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

  <section class="detail">
    <div class="container">
      <div class="breadcrumb mt-30">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li>Nasional</li>
        </ul>
      </div>
      <div class="read">
        <div class="detail-wrapper">

            <!-- KIRI -->
            <div class="detail-content">

              <div class="article-image">
                <h1>Industri Pangan dan Chef Profesional Dukung MBG memberikan pengalaman yang berguna untuk  bangsa dan untuk masyarakat </h1>
                <h3  class="mt-10">Rohman Manawi | Suara.com</h3>
                <span class="mt-10">Senin, 24 November 2025 | 35 Menit</span>
                <div class="share-article mt-20">
                  <ul>
                    <li>
                      <a href=""><img src="assets/images/icon/share-fb.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-wa.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-x.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-tele.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-link.svg"></a>
                    </li>
                  </ul>
                </div>
                <img class="mt-10" src="assets/images/news/news-2.jpg" alt="Berita">
                
              </div>

              <div class="article-content">
                <div class="banner mb-10">
                  <img src="assets/images/banner/banner.png" width="100%">
                </div>
                <div class="ten-second">
                  <div class="thumb">
                    <img src="assets/images/icon/second.png">
                  </div>

                  <ul>
                    <li><a href="#">Direktur Utama LPDP, Sudarto, tegaskan beasiswa inklusif untuk menjaring talenta terbaik tanpa memandang status ekonomi keluarga.</a></li>
                    <li><a href="#">LPDP Targetkan Afirmasi Lebih dari 25% Tahun 2026</a></li>
                  </ul>

                </div>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>
                <figure>
                  <img src="assets/images/news/news-6.jpg" alt="Berita">
                </figure>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>


                <div class="article-read mb-10">
                  <div class="thumb">
                    <img src="assets/images/icon/read.png">
                  </div>
                  <ul>
                    <p>Baca Juga</p>
                    <li><a href="#">Direktur Utama LPDP, Sudarto, tegaskan beasiswa inklusif untuk menjaring talenta terbaik tanpa memandang status ekonomi keluarga.</a></li>
                    
                  </ul>
                </div>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p>
              </div>

              <div class="article-share">
                <span>Bagikan:</span>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">WhatsApp</a>
              </div>

              <div class="article-tags">
                 <div class="title mt-10">
                  <h4>Liks</h4>
                  <div class="title-line"></div>
                </div> 
                <a href="#">Industri</a>
                <a href="#">Pangan</a>
                <a href="#">Nasional</a>
                <a href="#">MBG</a>
                <a href="#">Prabowo</a>
              </div>

              <div class="share-article share-bottom mt-20">
                <h4>Share Link</h4>
                <ul>
                    <li>
                      <a href=""><img src="assets/images/icon/share-fb.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-wa.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-x.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-tele.svg"></a>
                    </li>
                    <li>
                      <a href=""><img src="assets/images/icon/share-link.svg"></a>
                    </li>
                </ul>
              </div>

              <div class="mt-20 mb-30">
                <img src="assets/images/icon/comment.png" alt="" width="100%">
              </div>

            </div>

            <!-- KANAN -->
            <div class="detail-side">

              <div class="sidebar-banner">
                <img src="assets/images/banner/300x600.png" alt="Banner">
              </div>

              <div class="sidebar-popular">
                <h2><i><img src="assets/images/icon/logo-populer.png"></i> Terpopuler</h2>
                <ul>
                  <li class="popular-item">
                    <a href="">
                      <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                      <h4></h4>
                      <span>News | <i>35 Menit</i></span>
                    </a>
                  </li>
                  <li class="popular-item">
                    <a href="">
                      <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                      <span>News | <i>35 Menit</i></span>
                    </a>
                  </li>
                  <li class="popular-item">
                    <a href="">
                      <h3>Industri Pangan dan Chef memberikan makanan MBG Berkualitas</h3>
                      <span>News | <i>35 Menit</i></span>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="side-category">
                <h2>Diskusi Terpanas</h2>
                <div class="side-category-news">
                  <span class="news-number">1</span>
                  <div class="news-content">
                    <h3 class="news-title">Lorem Ipsum is Dummy Text</h3>
                    <div class="news-meta">
                      <span class="news-category">News</span> | 
                      <span class="news-time">35 Menit Lalu</span>
                      
                    </div>
                  </div>
                </div>

                <div class="side-category-news">
                  <span class="news-number">2</span>
                  <div class="news-content">
                    <h3 class="news-title">Dolor Sit Amet Consectetur</h3>
                    <div class="news-meta">
                      <span class="news-category">News</span> | 
                      <span class="news-time">1 Jam Lalu</span>
                      
                    </div>
                  </div>
                </div>

                <div class="side-category-news">
                  <span class="news-number">3</span>
                  <div class="news-content">
                    <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
                    <div class="news-meta">
                      <span class="news-category">News</span> | 
                      <span class="news-time">2 Jam Lalu</span>
                      
                    </div>
                  </div>
                </div>

                <div class="side-category-news">
                  <span class="news-number">4</span>
                  <div class="news-content">
                    <h3 class="news-title">Kisah Adik Darius Sinathrya Masuk Islam, Tersentuh Perjalanan Nabi Muhammad</h3>
                    <div class="news-meta">
                      <span class="news-category">News</span> | 
                      <span class="news-time">2 Jam Lalu</span>
                      
                    </div>
                  </div>
                </div>

                <div class="side-category-news">
                  <span class="news-number">5</span>
                  <div class="news-content">
                    <h3 class="news-title">Snoop Dogg Bikin Heboh di Swansea</h3>
                    <div class="news-meta">
                      <span class="news-category">News</span> | 
                      <span class="news-time">2 Jam Lalu</span>
                    </div>
                  </div>
                </div>

                <div class="latest-side mt-30">
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
                
                <!-- Tambahkan side-category-news lain sesuai kebutuhan -->
              </div>

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
  </script>


  <script>
    const regionalBtn = document.getElementById('regional-btn');
    const popup = document.getElementById('regional-popup');
    const closeBtn = document.getElementById('close-popup');

    regionalBtn.addEventListener('click', function(e) {
      e.preventDefault(); // mencegah scroll ke atas
      popup.style.display = 'flex';
  });

  closeBtn.addEventListener('click', function() {
    popup.style.display = 'none';
  });

  // Tutup popup jika klik di luar konten
  popup.addEventListener('click', function(e) {
    if (e.target === popup) {
      popup.style.display = 'none';
    }
  });
  </script>

</body>
</html>
