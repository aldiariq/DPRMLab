  <!-- ======= Footer ======= -->
  <footer id="saranmasukan">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-title">
              <h4>Saran atau Masukan</h4>
              <p>Silahkan Kirimkan Saran Atau Masukan Untuk Laboratorium Kami.</p>
            </div>
            <form>
              <input type="text" name="saranataumasukan" id="isi_saranmasukan" wire:model="isi_saranmasukan">
              <input wire:click.prevent="store()" type="submit" value="Kirim">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          @foreach($laboratorium as $data)
          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>{{ $data->nama_laboratoriums }}</h3>
            <p>
              Fakultas Ilmu Komputer Universitas Sriwijaya <br>
              Jl. Raya Palembang - Prabumulih <br>
              Km. 32 Indralaya, Ogan Ilir, <br>
              Sumatera Selatan <br><br>
              <strong>Email : </strong>{{ $data->email_laboratoriums }}<br>
            </p>
          </div>
          @endforeach

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Topik Penelitian Kami</h4>
            <ul>
              @foreach($fokuspenelitian as $data)
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $data->topik_fokuspenelitians }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tetap Terhubung Dengan Kami</h4>
            <p>Berikut tautan sosial media dari grup riset kami.</p>
            <div class="social-links mt-3">
              @foreach($laboratorium as $data)
              <a href="{{ $data->instagram_laboratoriums }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $data->youtube_laboratoriums }}" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a href="{{ $data->github_laboratoriums }}" class="github"><i class="bx bxl-github"></i></a>
              <a href="mailto:{{ $data->email_laboratoriums }}" class="email"><i class="bx bx-mail-send"></i></a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        @foreach($laboratorium as $data)
        Copyright &copy; 2021 <strong><span>{{ $data->nama_laboratoriums }}</span></strong>. All Rights Reserved
        @endforeach
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Web Template by Appland at <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script type="text/javascript">
    function ubahwarnaUtama(hex, percent) {
      hex = hex.replace(/^\s*#|\s*$/g, '');
      if (hex.length == 3) {
        hex = hex.replace(/(.)/g, '$1$1');
      }
      var r = parseInt(hex.substr(0, 2), 16),
        g = parseInt(hex.substr(2, 2), 16),
        b = parseInt(hex.substr(4, 2), 16);
      return '#' +
        ((0 | (1 << 8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
        ((0 | (1 << 8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
        ((0 | (1 << 8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
    }

    var kodeWarnautama = "@foreach($laboratorium as $data){{$data->warnatajuk_laboratoriums}}@endforeach";
    var kodeWarna = ubahwarnaUtama(kodeWarnautama, 50);

    $(document).ready(function() {
      var menuNavbar = document.querySelector(".navbar").style;
      menuNavbar.setProperty('--color', kodeWarnautama);

      var heroHeader = document.querySelector("#hero").style;
      heroHeader.setProperty('--background-color', kodeWarnautama);

      var fokusPenelitian = document.querySelector("#hero .download-btn").style;
      heroHeader.setProperty('--background', kodeWarnautama);

      var sectionBackground = document.getElementsByClassName("section-bg");
      for (var i = 0; i < sectionBackground.length; i++) {
        sectionBackground[i].style.backgroundColor = kodeWarna;
      }

      var sectionSaranmasukan = document.querySelector(".footer-newsletter").style;
      sectionSaranmasukan.setProperty('--background', kodeWarna);

      var h1Elements = document.getElementsByTagName("h1");
      var h2Elements = document.getElementsByTagName("h2");

      for (var i = 0; i < h1Elements.length; i++) {
        h1Elements[i].style.color = kodeWarnautama;
      }
      for (var i = 0; i < h2Elements.length; i++) {
        h2Elements[i].style.color = kodeWarnautama;
      }
    });
  </script>

  @livewireScripts

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  </body>

  </html>