<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN4 TASIKMALAYA</title>
    <link rel="icon" href="{{ asset ('storage/images/smk.png') }}" type="image/png" />
    
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts (Poppins) -->
    <link 
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" 
      rel="stylesheet">

    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .navbar-brand span {
        font-weight: 600;
        letter-spacing: 0.5px;
      }
      .nav-link {
        font-weight: 500;
      }
      .carousel-item img {
        height: 800px; /* sesuaikan */
        width: 100%;
        object-fit: cover;
      }
      section {
        margin-top: 130px;
      }
    .carousel-item:hover img {
        transform: scale(1.1);
      }

    .carousel-item img {
      transition: transform 0.5s ease-in-out;
    }

    </style>
  </head>
  <body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img 
            src="{{ asset('storage/images/smk.png') }}" 
            alt="Logo" 
            width="60">
          <div class="d-flex flex-column lh-1 ms-2">
            <span>SMK NEGERI 4</span>
            <span>TASIKMALAYA</span>
          </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarText" aria-controls="navbarText" 
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#Tentang">Tentang SMKN4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Penghargaan">Penghargaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Guru">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Ruangan">Ruangan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <section>
  <div class="d-flex justify-content-center">
  <div class="container">
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('storage/images/DSC09542.JPG') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>JOB FAIR 2024</h5>
        <p>" hadirkan berbagai peluang karir dan pendidikan, mempertemukan siswa dengan perusahaan serta universitas unggulan untuk masa depan cerah."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/images/DSC_1162.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Guru SMKN 4 — Inspirasi dan Dedikasi</h5>
        <p>Foto guru SMKN 4 menampilkan tim pendidik yang berdedikasi tinggi, profesional, dan penuh semangat membimbing siswa menuju masa depan cerah dengan ilmu dan karakter kuat.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/images/DSC00046.JPG') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Perpisahan Kelas 12 Surat Edaran KDM</h5>
        <p>" Kami mengundang seluruh siswa kelas 12 untuk hadir dalam acara perpisahan yang akan diadakan sebagai bentuk kenang-kenangan dan apresiasi atas perjuangan selama ini. "</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</div>
</section>


<section>
  <div class="container my-4">
  <div class="row mb-7">
    <div class="col-md-6">
      <img src="gambar-utama.jpg" data-aos="fade-up" class="img-fluid w-100" alt="...">
    </div>
    <div class="col-md-6" data-aos="fade-up">
      <p class="text-muted">Seminar/Workshop</p>
      <h4>Ali Ghufron : BPJS Kesehatan Catat 2 Juta Data Transaksi Kesehatan Per Hari</h4>
      <small class="text-secondary">22 Agustus 2025, 10.45</small>
      <p class="mt-2">Direktur Utama BPJS Kesehatan, Ali Ghufron Mukti, mengatakan sistem jaminan kesehatan nasional bertumpu pada nilai gotong royong ...</p>
    </div>
  </div>
  <div class="row g-3">
    <div class="col-md-4">
      <div class="card h-100" data-aos="fade-up">
        <img src="gambar1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="text-muted">Penelitian dan Inovasi</p>
          <h5>Mampu Tingkatkan Efisiensi Pemupukan, UGM dan Bukit Asam...</h5>
          <small class="text-secondary">21 Agustus 2025, 16.15</small>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100" data-aos="fade-up">
        <img src="gambar2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="text-muted">Seminar/Workshop</p>
          <h5>Meutya Hafid: Penetrasi Internet jadi Tantangan dalam...</h5>
          <small class="text-secondary">21 Agustus 2025, 15.55</small>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100" data-aos="fade-up">
        <img src="gambar3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="text-muted">Liputan/Berita</p>
          <h5>Amerika Serikat Tarik Udang Impor Asal Indonesia...</h5>
          <small class="text-secondary">21 Agustus 2025, 15.45</small>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

  <footer class="bg-dark text-white pt-5 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="mb-3 fw-bold">SMKN 4 TASIKMALAYA</h5>
        <p>Sekolah Menengah Kejuruan Negeri 4 Tasikmalaya, unggul dalam pendidikan vokasi dan karakter bangsa.</p>
        <p><i class="bi bi-geo-alt-fill me-2"></i>Jl Depok Kel. Sukamenak Kec. Purbaratu
Kota Tasikmalaya 46196.</p>
        <p><i class="bi bi-telephone-fill me-2"></i>+62265312059</p>
        <p><i class="bi bi-envelope-fill me-2"></i>info@smkn4tasikmalaya.sch.id</p>
      </div>

      <div class="col-md-2 mb-4">
        <h6 class="mb-3 fw-semibold">Link Cepat</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
          <li><a href="#" class="text-white text-decoration-none">Profil Sekolah</a></li>
          <li><a href="#" class="text-white text-decoration-none">Jurusan</a></li>
          <li><a href="#" class="text-white text-decoration-none">Berita & Kegiatan</a></li>
          <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4">
        <h6 class="mb-3 fw-semibold">Ikuti Kami</h6>
        <a href="https://www.facebook.com/4smkn" target="_blank" class="text-white fs-4 me-3" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/smkn4tasik" target="_blank" class="text-white fs-4 me-3" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://instagram.com/smkn4tasikmalaya" target="_blank" class="text-white fs-4 me-3" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

    <hr class="bg-white" />
    <div class="text-center pt-3 small">
      &copy; 2025 SMKN 4 TASIKMALAYA. All rights reserved.
    </div>
  </div>
</footer>
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>
