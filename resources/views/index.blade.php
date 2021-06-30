@include('template_index.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo mt-3 ">
        <a href="{{ url('/') }}"><img src="assets/img/logoutama.png" alt="" class="img-fluid mb-2"></a>
        <!-- <h1><a href="index.html" class="fw-bold">DPRMLab</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar fw-bold">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Halaman Utama</a></li>
          <li><a class="nav-link scrollto" href="#dosenpembimbing">Dosen Pembimbing</a></li>
          <li><a class="nav-link scrollto" href="#penelitiankami">Penelitian Kami</a></li>
          <li><a class="nav-link scrollto" href="#anggotakami">Anggota Kami</a></li>
          <li><a class="nav-link scrollto" href="#jadwalbimbingan">Jadwal Bimbingan</a></li>
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Halaman Dashboard</a></li>
            @else
            <li><a class="getstarted scrollto" href="{{ url('/login') }}">Halaman Login</a></li>
            @endauth
          </div>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Data Science and Machine Learning Research Laboratory</h1>
            <h2>Penjelasan DPRMLab</h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-4">
                    <a href="#" class="download-btn"><i class="bx bx-book"></i> Data Science</a>
                  </div>
                  <div class="col-lg-4">
                    <a href="#" class="download-btn"><i class="bx bx-message-alt-dots"></i> Machine Learning</a>
                  </div>
                  <div class="col-lg-4">
                    <a href="#" class="download-btn"><i class="bx bx-lock"></i> Cryptography</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/gambarheader.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Dosen Pembimbing Section ======= -->
    <section id="dosenpembimbing" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dosen Pembimbing</h2>
          <p>Berikut Dosen Pembimbing Mahasiswa Yang Tergabung Dalam Grup Riset Penelitian DPRMLab.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="500">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/pakjulian.jpg" class="testimonial-img" alt="">
                <h3>Julian Supardi, M.T.</h3>
                <h4>Dosen Pembimbing</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kata Sambutan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/paksamsuryadi.jpg" class="testimonial-img" alt="">
                <h3>Syamsuryadi, M.Kom., Ph.D.</h3>
                <h4>Dosen Pembimbing</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kata Sambutan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Dosen Pembimbing Section -->

    <!-- ======= Penelitian Section ======= -->
    <section id="penelitiankami" class="details">
      <div class="container">

        <div class="section-title">
          <h2>Penelitian Kami</h2>
          <p>Berikut Hasil Penelitian yang Telah dan Sedang Dilaksanakan.</p>
        </div>

        <div class="row content">
          <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/gambarpenelitian.png" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="col-md-6 pt-4" data-aos="fade-up">
            <h3>Judul Penelitian.</h3>
            <p><i class="bi bi-people"></i> Nama Peneliti</p>
            <p><i class="bi bi-calendar-date"></i> Tanggal Penelitian</p>
            <p><i class="bi bi-layout-sidebar"></i> Status penelitian</p>
            <p><i class="bi bi-card-heading"></i> Penjelasan singkat penelitian</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/gambarpenelitian.png" class="img-fluid img-thumbnail" alt="">
          </div>
          <div class="col-md-6 pt-4" data-aos="fade-up">
            <h3>Judul Penelitian.</h3>
            <p><i class="bi bi-people"></i> Nama Peneliti</p>
            <p><i class="bi bi-calendar-date"></i> Tanggal Penelitian</p>
            <p><i class="bi bi-layout-sidebar"></i> Status penelitian</p>
            <p><i class="bi bi-card-heading"></i> Penjelasan singkat penelitian</p>
          </div>
        </div>

        <section class="faq section-bg mt-5">
          <div class="container" data-aos="fade-up">
            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Lihat Penelitian Kami Selengkapnya. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <section class="details">
                      <div class="container">
                        <div class="row content">
                          <div class="col-md-6" data-aos="fade-right">
                            <img src="assets/img/gambarpenelitian.png" class="img-fluid img-thumbnail" alt="">
                          </div>
                          <div class="col-md-6 pt-4" data-aos="fade-up">
                            <h3>Judul Penelitian.</h3>
                            <p><i class="bi bi-people"></i> Nama Peneliti</p>
                            <p><i class="bi bi-calendar-date"></i> Tanggal Penelitian</p>
                            <p><i class="bi bi-layout-sidebar"></i> Status penelitian</p>
                            <p><i class="bi bi-card-heading"></i> Penjelasan singkat penelitian</p>
                          </div>
                        </div>

                        <div class="row content">
                          <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                            <img src="assets/img/gambarpenelitian.png" class="img-fluid img-thumbnail" alt="">
                          </div>
                          <div class="col-md-6 pt-4" data-aos="fade-up">
                            <h3>Judul Penelitian.</h3>
                            <p><i class="bi bi-people"></i> Nama Peneliti</p>
                            <p><i class="bi bi-calendar-date"></i> Tanggal Penelitian</p>
                            <p><i class="bi bi-layout-sidebar"></i> Status penelitian</p>
                            <p><i class="bi bi-card-heading"></i> Penjelasan singkat penelitian</p>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </section>
      </div>
    </section><!-- End Penelitian Section -->

    <!-- ======= Anggota Kami Section ======= -->
    <section id="anggotakami" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Anggota Kami</h2>
          <p>Berikut Mahasiswa Yang Tergabung Dalam Grup Riset Penelitian DPRMLab.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/gambaranggota.png" class="testimonial-img" alt="">
                <h3>Nama Anggota</h3>
                <h3>NIM Anggota</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kata Sambutan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/gambaranggota.png" class="testimonial-img" alt="">
                <h3>Nama Anggota</h3>
                <h3>NIM Anggota</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kata Sambutan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/gambaranggota.png" class="testimonial-img" alt="">
                <h3>Nama Anggota</h3>
                <h3>NIM Anggota</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kata Sambutan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Anggota Kami Section -->

    <!-- ======= Jadwal Bimbingan Section ======= -->
    <section id="jadwalbimbingan" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Jadwal Bimbingan</h2>
          <p>Berikut Jadwal Bimbingan yang Akan Datang pada Grup Riset Kami.</p>
          <div class="section-bg mt-3">
            <p>Tabel</p>
          </div>
        </div>
      </div>
    </section><!-- End Jadwal Bimbingan Section -->

  </main><!-- End #main -->

  @include('template_index.footer')