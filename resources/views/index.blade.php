@extends('layout.common')
@section('content')
    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <img src="assets/img/beranda.jpg" alt="" data-aos="fade-in"data-aos-delay="10" />

        <div class="container" data-aos="fade-up" data-aos-delay="10">
          <div class="row justify-content-start">
            <div class="col-lg-8">
              <h2>Welcome to SSB PSAD Brawijaya</h2>
              <p>Menuju Sepakbola Indonesia ke Kancah Dunia</p>
              @auth
              @else
              <a href="{{route('players.create')}}" class="btn-get-started">Daftar Sekarang</a>
              @endauth
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>About Us<br /></span>
          <h2>About Us<br /></h2>
          <p>
            SSB PSAD Brawijaya adalah lembaga pendidikan olahraga yang berfokus
            pada pengembangan keterampilan sepakbola bagi anak-anak dan remaja.
            SSB ini terletak di daerah Surabaya, Jawa Timur, Indonesia.
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div
              class="col-lg-6 order-1 order-lg-2"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <img src="assets/img/about.ssb.jpg" class="img-fluid" alt="" />
            </div>

            <div
              class="col-lg-6 order-2 order-lg-1 content"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <h3>Visi dan Misi SSB PSAD Brawijaya</h3>
              <p class="fst-italic">
                Visi: menjadi lembaga pendidikan sepakbola terkemuka yang
                menghasilkan pemain berkualitas tinggi yang siap bersaing di
                tingkat nasional dan internasional.
              </p>
              <ul>
                <li>
                  <p class="fst-italic">
                    Misi:

                    <i class="bi bi-check-circle"></i>
                    <span
                      >Mengembangkan bakat sepakbola anak-anak sejak usia dini.</span>
                  </p>
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>
                  <span
                    >Menyediakan program latihan yang berkualitas dan terstruktur.</span>
                </li>
                <li>
                  <i class="bi bi-check-circle"></i>
                  <span
                    >Membangun karakter positif seperti disiplin, kerjasama, dan sportivitas.</span>
                </li>
                <i class="bi bi-check-circle"></i>
                <span
                  >Membina hubungan yang baik dengan klub-klub sepakbola profesional untuk penyaluran pemain berbakat.</span>
              </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Cards Section -->
      <section id="cards" class="cards section">
        <div class="container">
          <h3>Program Pelatihan</h3>
          <div class="row no-gutters">
            <div
              class="col-lg-4 col-md-6 card"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <span>01</span>
              <h4>Kelas Pemula (U-6 sampai U-8)</h4>
              <p>
                Fokus pada pengenalan dasar-dasar sepakbola dan pengembangan koordinasi motorik.
              </p>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6 card"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <span>02</span>
              <h4>Kelas Madya (U-9 sampai U-11)</h4>
              <p>
                Penekanan pada teknik dasar, pemahaman taktik dasar, dan penguatan fisik.
              </p>
            </div>
            <!-- End Card Item -->

            <div
              class="col-lg-4 col-md-6 card"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <span>03</span>
              <h4>Kelas Lanjutan (U-12 sampai U-15)</h4>
              <p>
                Latihan intensif yang mencakup strategi permainan, pengembangan fisik lanjutan, dan persiapan menghadapi kompetisi.
              </p>
            </div>
            <!-- End Card Item -->
          </div>
        </div>
      </section>
      <!-- /Cards Section -->

      <!-- Clients Section -->
      <section id="clients" class="clients section">
        <div class="container">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 1000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/adidas.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/nike.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/puma.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/umbro.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/fifa.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/pssi.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/indonesia.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/clients/euro.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Clients Section -->

      <!-- News Section -->
      <section id="news" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Breaking News</span>
          <h2>Breaking News</h2>
          <p>
            Seputar harian SSB PSAD Brawijaya
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            @foreach ($news as $n)
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
            >
              <div class="service-item position-relative">
                <div class="img">
                  <img
                  src="{{ asset('storage/' . $n->image) }}"
                  class="img-fluid"
                  alt="Gambar Konten"/>
                </div>
                <a href="{{route('news.index',$n->id)}}" class="stretched-link">
                  <h3>{{$n -> title}}</h3>
                </a>
                <p>
                  {{$n -> content}}
                </p>
              </div>
            </div>
            @endforeach
            <!-- End Service Item -->

            

            
          </div>
        </div>
      </section>
      <!-- /Services Section -->

      <!-- Call To Action Section -->
      <section id="call-to-action" class="call-to-action section">
        <img src="assets/img/pildun.jpg" alt="" />

        <div class="container">
          <div
            class="row justify-content-center"
            data-aos="zoom-in"
            data-aos-delay="10"
          >
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Hai Calon Bintang Lapangan Hijau!</h3>
                <p>
                  Apakah kamu memiliki impian menjadi pesepakbola profesional? Inilah saat yang tepat untuk mewujudkan impianmu! SSB PSAD BRAWIJAYA SURABAYA membuka pendaftaran bagi kamu yang bersemangat, berbakat, dan berkomitmen untuk mengasah kemampuan sepakbolamu.
                </p>
                @auth
                @else
                <a class="cta-btn" href="{{route('players.create')}}">Daftar Sekarang Juga!</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Call To Action Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Hall of Picture</span>
          <h2>Hall of Picture</h2>
          <p>
            Kumpulan foto tentang SSB PSAD Brawijaya Surabaya
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order"
          >
            <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Champions</li>
              <li data-filter=".filter-product">Match</li>
              <li data-filter=".filter-branding">Training</li>
            </ul>
            <!-- End Portfolio Filters -->

            <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="10"
            >
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/champions1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Champions 1</h4>
                  <p>Tim PSAD Brawijaya menjuarai piala Surabaya</p>
                  <a
                    href="assets/img/masonry-portfolio/champions1.jpg"
                    title="Champions 1"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/match1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Match 1</h4>
                  <p>Pertandingan uji coba Tim PSAD menghadapi Tim Horizon</p>
                  <a
                    href="assets/img/masonry-portfolio/match1.jpg"
                    title="Match 1"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/training1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Training 1</h4>
                  <p>Tim PSAD dibagi menjadi 2 untuk melakukan latihan bersama</p>
                  <a
                    href="assets/img/masonry-portfolio/training1.jpg"
                    title="Training 1"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/champions2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Champions 2</h4>
                  <p>Tim PSAD menjuarai turnamen tingkat nasional</p>
                  <a
                    href="assets/img/masonry-portfolio/champions2.jpg"
                    title="Champions 2"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/match2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Match 2</h4>
                  <p>Tim PSAD melakukan pertandingan turnamen di Surabaya</p>
                  <a
                    href="assets/img/masonry-portfolio/match2.jpg"
                    title="Match 2"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/training2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Training 2</h4>
                  <p>Tim PSAD melakukan latihan drill run</p>
                  <a
                    href="assets/img/masonry-portfolio/training2.jpg"
                    title="Training 2"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <img
                  src="assets/img/masonry-portfolio/champions3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Champions 3</h4>
                  <p>Tim PSAD menjuarai turnamen tingkat Internasional</p>
                  <a
                    href="assets/img/masonry-portfolio/champions3.jpg"
                    title="Champions 3"
                    data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <img
                  src="assets/img/masonry-portfolio/match3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Match 3</h4>
                  <p>Tim PSAD menjalani match turnamen tingkat Internasional di Spanyol</p>
                  <a
                    href="assets/img/masonry-portfolio/match3.jpg"
                    title="Match 3"
                    data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <img
                  src="assets/img/masonry-portfolio/training3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Training 3</h4>
                  <p>Tim PSAD melakukan latihan menggiring bola menggunakan consectetur</p>
                  <a
                    href="assets/img/masonry-portfolio/training3.jpg"
                    title="Training 3"
                    data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                  <a
                    href="portfolio-details.html"
                    title="More Details"
                    class="details-link"
                    ><i class="bi bi-link-45deg"></i
                  ></a>
                </div>
              </div>
              <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
          </div>
        </div>
      </section>
      <!-- /Portfolio Section -->

      <!-- Pricing Section -->
      @auth
      @else
      <section id="pricing" class="pricing section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Pendaftaran</span>
          <h2>Pendaftaran Telah Dibuka!</h2>
          <p>
            Daftar sekarang juga untuk masa depan anak bangsa dan Indonesia.
          </p>
        </div>
        <!-- End Section Title -->
        
        <div class="container">

          <div class="row g-4 g-lg-0">
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="10">
              <div class="pricing-item">
                <h3>Iuran Latihan</h3>
                <h4><sup>Rp</sup>50.000<span> / latihan</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Benefit makan dan minuman bergizi</span></li>
                  <li><i class="bi bi-check"></i> <span>Benefit foto saat latihan</span></li>
                  <li><i class="bi bi-check"></i> <span>Peningkatan mental dan emosional</span></li>
                  <li><i class="bi bi-check"></i> <span>Peluang untuk berkompetisi</span></li>
                  <li><i class="bi bi-check"></i> <span>Peningkatan keterampilan individu</span></li>
                </ul>
                <div class="text-center"><a href="{{route('players.create')}}" class="buy-btn">Daftar Sekarang</a></div>
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item">
                <h3>Gabung SSB PSAD BRAWIJAYA</h3>
                <h4><sup>Rp</sup>250.000<span></span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Benefit jersey 1 set + sepatu bola</span></li>
                  <li><i class="bi bi-check"></i> <span>Benefit bola EURO 2024</span></li>
                  <li><i class="bi bi-check"></i> <span>Bimbingan dari pelatih berpengalaman</span></li>
                  <li><i class="bi bi-check"></i> <span>Peluang karier profesional</span></li>
                  <li><i class="bi bi-check"></i> <span>Akses fasilitias terbaik</span></li>
                </ul>
                
                <div class="text-center">
                  <a href="{{route('players.create')}}" 
                  class="buy-btn">Daftar Sekarang</a>
                </div>
              </div>
            </div><!-- End Pricing Item -->
          </div>
        </div>
      </section>
      @endauth
      <!-- /Pricing Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>
            Untuk informasi lebih lanjut, silahkan hubungi kami!
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="10">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="10"
              >
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. Lap. Brawijaya, Kesatrian, Kec. Wonokromo, Kota Surabaya, Jawa Timur.</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="10"
              >
                <i class="bi bi-telephone"></i>
                <h3>Hubungi Kami</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div
                class="info-item d-flex flex-column justify-content-center align-items-center"
                data-aos="fade-up"
                data-aos-delay="10"
              >
                <i class="bi bi-envelope"></i>
                <h3>Email Kami</h3>
                <p>ssbpsadbrawijaya@.com</p>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="10">
              <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.26471076707!2d112.6404768!3d-7.9715712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62926e8dd3efd%3A0x24632a42b4a2d680!2sSSB.PSAD%20Dam%20V%20Brawijaya%20Surabaya!5e0!3m2!1sid!2sid!4v1719334190248!5m2!1sid!2sid"></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
                data-aos="fade-up"
                data-aos-delay="10"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required=""
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Subject"
                      required=""
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Message"
                      required=""
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- /Contact Section -->
    </main>
@endsection

    