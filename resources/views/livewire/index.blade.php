<div>
    @include('livewire.template_index.header')

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top  header-transparent ">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo mt-3 ">
                    @foreach($laboratorium as $data)
                    <a href="{{ url('/') }}"><img src="{{ asset('storage/'.$data->logo_laboratoriums) }}" alt="" class="img-fluid mb-2"></a>
                    @endforeach
                    <!-- <h1><a href="index.html" class="fw-bold">DPRMLab</a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                </div>

                <nav id="navbar" class="navbar fw-bold">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Halaman Utama</a></li>
                        <li><a class="nav-link scrollto" href="#dosenpembimbing">Dosen Pembimbing</a></li>
                        <li class="dropdown"><a class="nav-link scrollto" href="#penelitian"><span>Penelitian Kami</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="nav-link scrollto" href="#penelitian">Daftar Penelitian</a></li>
                                <li><a class="nav-link scrollto" href="#publikasipenelitian">Publikasi Jurnal Penelitian</a></li>
                                <li><a class="nav-link scrollto" href="#demodokumentasipenelitian">Demo/Dokumentasi Penelitian</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#anggotakami">Anggota Kami</a></li>
                        <li class="dropdown"><a class="nav-link scrollto" href="#jadwalbimbingan"><span>Jadwal</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="nav-link scrollto" href="#jadwalbimbingan">Jadwal Bimbingan</a></li>
                                <li><a class="nav-link scrollto" href="#jadwalpraktikum">Jadwal Praktikum</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#saranmasukan">Saran atau Masukan</a></li>

                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <!-- <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Halaman Dashboard</a></li> -->
                            <div class="logo mt-3 ">
                                <a href="{{ url('/dashboard') }}"><img src="{{ url('assets/img/logodashboard.png') }}" alt="" class="img-fluid mb-2"></a>
                                <!-- <h1><a href="index.html" class="fw-bold">DPRMLab</a></h1> -->
                                <!-- Uncomment below if you prefer to use an image logo -->
                            </div>
                            @else
                            <!-- <li><a class="getstarted scrollto" href="{{ url('/login') }}">Halaman Login</a></li> -->
                            <div class="logo mt-3 ">
                                <a href="{{ url('/login') }}"><img src="{{ url('assets/img/logologin.png') }}" alt="" class="img-fluid mb-2"></a>
                            </div>

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
                            @foreach($laboratorium as $data)
                            <h1>{{ $data->nama_laboratoriums }}</h1>
                            <h2>{{ $data->penjelasan_laboratoriums }}</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach($fokuspenelitian as $data)
                                        <div class="col-lg-4 mt-3">
                                            <a href="#" class="download-btn"><i class="bx bx-book"></i> {{ $data->topik_fokuspenelitians }}</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                        @foreach($laboratorium as $data)
                        <img src="{{ asset('storage/'.$data->foto_laboratoriums) }}" class="img-fluid" alt="">
                        @endforeach
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
                            @foreach($pembimbing as $data)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset('storage/'.$data->foto_pembimbing) }}" class="testimonial-img" alt="">
                                    <h3>{{ $data->nama_pembimbing }}</h3>
                                    <h4>{{ $data->nip_pembimbing }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $data->ket_pembimbing }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Dosen Pembimbing Section -->

            <!-- ======= Penelitian Section ======= -->
            <section id="penelitian" class="details">
                <div class="container">

                    <div class="section-title">
                        <h2>Penelitian Kami</h2>
                        <p>Berikut Hasil Penelitian yang Telah dan Sedang Dilaksanakan.</p>
                    </div>

                    @php
                    $nomor = 1;
                    @endphp
                    @foreach($penelitianterbaru as $data)
                    <div class="row content">
                        @if($nomor % 2 == 1)
                        <div class="col-md-6" data-aos="fade-right">
                            @else
                            <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                @endif
                                <img src="{{ asset('storage/'.$data->foto_penelitian)}}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="col-md-6 pt-4" data-aos="fade-up">
                                <h3>{{ $data->judul_penelitian }}</h3>
                                <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                <p><i class="bi bi-calendar-date"></i> {{ $data->tanggal_penelitian }}</p>
                                <p><i class="bi bi-card-heading"></i> {{ $data->penjelasan_penelitian }}</p>
                            </div>
                        </div>

                        @php
                        $nomor++;
                        @endphp
                        @endforeach

                        <section class="faq section-bg mt-5">
                            <div class="container" data-aos="fade-up">
                                <div class="accordion-list">
                                    <ul>
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Lihat Penelitian Kami Selengkapnya. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                                <section class="details">
                                                    <div class="container">
                                                        @php
                                                        $nomor = 1;
                                                        @endphp
                                                        @foreach($penelitian as $data)
                                                        <div class="row content">
                                                            @if($nomor % 2 == 1)
                                                            <div class="col-md-6" data-aos="fade-right">
                                                                @else
                                                                <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                                                    @endif
                                                                    <img src="{{ asset('storage/'.$data->foto_penelitian)}}" class="img-fluid img-thumbnail" alt="">
                                                                </div>
                                                                <div class="col-md-6 pt-4" data-aos="fade-up">
                                                                    <h3>{{ $data->judul_penelitian }}</h3>
                                                                    <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                                                    <p><i class="bi bi-calendar-date"></i> {{ $data->tanggal_penelitian }}</p>
                                                                    <p><i class="bi bi-card-heading"></i> {{ $data->penjelasan_penelitian }}</p>
                                                                </div>
                                                            </div>
                                                            @php
                                                            $nomor++;
                                                            @endphp
                                                            @endforeach
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

            <!-- ======= Publikasi Penelitian Section ======= -->
            <section id="publikasipenelitian" class="details">
                <div class="container">

                    <div class="section-title">
                        <h2>Publikasi Penelitian Kami</h2>
                        <p>Berikut Daftar Publikasi dari Penelitian Yang Telah Kami Laksanakan.</p>
                    </div>

                    @php
                    $nomor = 1;
                    @endphp
                    @foreach($publikasi_penelitian_terbaru as $data)
                    <div class="row content">
                        @if($nomor % 2 == 1)
                        <div class="col-md-6" data-aos="fade-right">
                            @else
                            <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                @endif
                                <img src="{{ asset('storage/'.$data->foto_publikasi_penelitian)}}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="col-md-6 pt-4" data-aos="fade-up">
                                <h3>{{ $data->judul_penelitian }}</h3>
                                <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                <p><i class="bi bi-calendar-date"></i> {{ $data->tanggal_publikasi_penelitian }}</p>
                                <p><i class="bi bi-geo-alt"></i> {{ $data->tempat_publikasi_penelitian }}</p>
                                <p><i class="bi bi-card-heading"></i> {{ $data->ket_publikasi_penelitian }}</p>
                            </div>
                        </div>

                        @php
                        $nomor++;
                        @endphp
                        @endforeach

                        <section class="faq section-bg mt-5">
                            <div class="container" data-aos="fade-up">
                                <div class="accordion-list">
                                    <ul>
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Lihat Publikasi Penelitian Kami Selengkapnya. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                                <section class="details">
                                                    <div class="container">
                                                        @php
                                                        $nomor = 1;
                                                        @endphp
                                                        @foreach($publikasi_penelitian as $data)
                                                        <div class="row content">
                                                            @if($nomor % 2 == 1)
                                                            <div class="col-md-6" data-aos="fade-right">
                                                                @else
                                                                <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                                                    @endif
                                                                    <img src="{{ asset('storage/'.$data->foto_publikasi_penelitian)}}" class="img-fluid img-thumbnail" alt="">
                                                                </div>
                                                                <div class="col-md-6 pt-4" data-aos="fade-up">
                                                                    <h3>{{ $data->judul_penelitian }}</h3>
                                                                    <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                                                    <p><i class="bi bi-calendar-date"></i> {{ $data->tanggal_publikasi_penelitian }}</p>
                                                                    <p><i class="bi bi-geo-alt"></i> {{ $data->tempat_publikasi_penelitian }}</p>
                                                                    <p><i class="bi bi-card-heading"></i> {{ $data->ket_publikasi_penelitian }}</p>
                                                                </div>
                                                            </div>
                                                            @php
                                                            $nomor++;
                                                            @endphp
                                                            @endforeach
                                                        </div>
                                                </section>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
            </section><!-- End Publikasi Penelitian Section -->

            <!-- ======= Demo/Dokumentasi Penelitian Section ======= -->
            <section id="demodokumentasipenelitian" class="details">
                <div class="container">

                    <div class="section-title">
                        <h2>Demo/Dokumentasi Penelitian Kami</h2>
                        <p>Berikut Daftar Demo/Dokumentasi dari Penelitian Yang Telah Kami Publikasikan.</p>
                    </div>

                    @php
                    $nomor = 1;
                    @endphp
                    @foreach($demodokumentasi_penelitian_terbaru as $data)
                    <div class="row content">
                        @if($nomor % 2 == 1)
                        <div class="col-md-6" data-aos="fade-right">
                            @else
                            <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                @endif
                                @php
                                $url = $data->linkvideo_demo_dokumentasi_penelitian;
                                parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                                @endphp
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/{{ $my_array_of_vars['v'] }}" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6 pt-4" data-aos="fade-up">
                                <h3>{{ $data->judul_penelitian }}</h3>
                                <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                <p><i class="bi bi-card-heading"></i> {{ $data->ket_demo_dokumentasi_penelitian }}</p>
                            </div>
                        </div>

                        @php
                        $nomor++;
                        @endphp
                        @endforeach

                        <section class="faq section-bg mt-5">
                            <div class="container" data-aos="fade-up">
                                <div class="accordion-list">
                                    <ul>
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Lihat Demo/Dokumentasi Penelitian Kami Selengkapnya. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                                <section class="details">
                                                    <div class="container">
                                                        @php
                                                        $nomor = 1;
                                                        @endphp
                                                        @foreach($demodokumentasi_penelitian as $data)
                                                        <div class="row content">
                                                            @if($nomor % 2 == 1)
                                                            <div class="col-md-6" data-aos="fade-right">
                                                                @else
                                                                <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                                                                    @endif
                                                                    @php
                                                                    $url = $data->linkvideo_demo_dokumentasi_penelitian;
                                                                    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                                                                    @endphp
                                                                    <div class="ratio ratio-16x9">
                                                                        <iframe src="https://www.youtube.com/embed/{{ $my_array_of_vars['v'] }}" title="YouTube video" allowfullscreen></iframe>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 pt-4" data-aos="fade-up">
                                                                    <h3>{{ $data->judul_penelitian }}</h3>
                                                                    <p><i class="bi bi-people"></i> {{ $data->nama_penelitian }}</p>
                                                                    <p><i class="bi bi-card-heading"></i> {{ $data->ket_demo_dokumentasi_penelitian }}</p>
                                                                </div>
                                                            </div>
                                                            @php
                                                            $nomor++;
                                                            @endphp
                                                            @endforeach
                                                        </div>
                                                </section>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
            </section><!-- End Demo/Dokumentasi Penelitian Section -->

            <!-- ======= Anggota Kami Section ======= -->
            <section id="anggotakami" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Anggota Kami</h2>
                        <p>Berikut Mahasiswa Yang Tergabung Dalam Grup Riset Penelitian DPRMLab.</p>
                    </div>

                    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach($anggota as $data)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset('storage/'.$data->foto_anggota) }}" class="testimonial-img" alt="">
                                    <h3>{{ $data->nama_anggota }}</h3>
                                    <h3>{{ $data->nim_anggota }}</h3>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $data->ket_anggota }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Anggota Kami Section -->

            <!-- ======= Jadwal Bimbingan Section ======= -->
            <section id="jadwalbimbingan" class="faq">
                <div class="container">
                    <div class="section-title">
                        <h2>Jadwal Bimbingan</h2>
                        <p>Berikut Jadwal Bimbingan yang Akan Datang pada Grup Riset Kami.</p>
                        <div class="section-bg mt-3 px-3 py-3">
                            <table id="tabeljadwalbimbingan" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bimbingan as $data)
                                    <tr>
                                        <td>{{ $data->nama_anggota }}</td>
                                        <td>{{ $data->tanggal_bimbingan }}</td>
                                        <td>{{ $data->ket_bimbingan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="py-3">
                            {{ $bimbingan->links() }}
                        </div>
                    </div>
                </div>
            </section><!-- End Jadwal Bimbingan Section -->

            <!-- ======= Jadwal Praktikum Section ======= -->
            <section id="jadwalpraktikum" class="faq">
                <div class="container">
                    <div class="section-title">
                        <h2>Jadwal Praktikum</h2>
                        <p>Berikut Jadwal Praktikum pada Grup Riset Kami.</p>
                        <div class="section-bg mt-3 px-3 py-3">
                            <table id="tabeljadwalpraktikum" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Mata Kuliah</th>
                                        <th>Kelas</th>
                                        <th>Dosen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($praktikum as $data)
                                    <tr>
                                        <td>{{ $data->hari_praktikums }}</td>
                                        <td>{{ $data->waktumulai_praktikums }} s/d {{ $data->waktuselesai_praktikums }} WIB</td>
                                        <td>{{ $data->matakuliah_praktikums }}</td>
                                        <td>{{ $data->kelas_praktikums }}</td>
                                        <td>{{ $data->dosen_praktikums }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="py-3">
                            {{ $praktikum->links() }}
                        </div>
                    </div>
                </div>
            </section><!-- End Jadwal Bimbingan Section -->

        </main><!-- End #main -->

        @include('livewire.template_index.footer')
</div>