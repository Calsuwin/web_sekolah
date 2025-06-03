<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
     <style>
      .carousel-inner img {
        height: 500px;
        object-fit: cover;
      }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;" data-bs-theme="dark">
      <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
        <img src="{{ asset('storage/corasuel/Logo_SMK_Negeri_4_Tasikmalaya.png') }}" alt="Logo" width="74" height="74" class="d-inline-block align-text-top">
        <span class="ms-2" style="font-size: calc(50px * 0.4);"></span>
      </a>
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('beranda') }}">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profil') }}">Profil Sekolah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('jurusan') }}">Jurusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guru') }}">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('siswa') }}">Siswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


   
  </head>
  <body bgcolor="#343a40">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{  asset('storage/corasuel/Dokumen-1.jpeg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sekolah Yang Terpercaya</h5>
            <p>Dengan Terakreditasi A sekolah unggulan ini banyak mendapatkan penghargaan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{  asset('storage/corasuel/lapang2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lapang Yang Besar Dan Nyaman</h5>
            <p>Bisa Leluasa Bermain Bahkan Beraktivitas Di Luar Ruangan Dengan Pengalaman Yang Baik</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{  asset('storage/corasuel/main (2).jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dengan Ruangan Yang Bersih Dan Nyaman</h5>
            <p>Disemua Tempat Jurusan Dan Praktek Mempunyai Ruangan Yang Bersih Dan Bagus</p>
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

 <!-- Gallery Foto Bootstrap dengan Teks dan Ukuran Sama -->
<style>
  .gallery-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  .gallery-caption {
    text-align: center;
    font-size: 1rem;
    font-weight: 500;
    margin-top: 8px;
    color: #222;
  }
</style>

<div class="container my-5">
  <div class="row g-3">
    <div class="col-6 col-md-4 col-lg-3">
      <img src="{{ asset('storage/corasuel/main (1).jpg') }}" class="gallery-img rounded" alt="Foto 1">
      <div class="gallery-caption">Ini Adalah Tempat Praktek TBSM</div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <img src="{{ asset('storage/corasuel/main (2).jpg') }}" class="gallery-img rounded" alt="Foto 2">
      <div class="gallery-caption">Ini Adalah Tempat Praktek PPLG</div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <img src="{{ asset('storage/corasuel/main (3).jpg') }}" class="gallery-img rounded" alt="Foto 3">
      <div class="gallery-caption">Ini Adalah Tempat Praktek TKJT</div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <img src="{{ asset('storage/corasuel/mesjid1.jpg') }}" class="gallery-img rounded" alt="Foto 4">
      <div class="gallery-caption">Mesjid Yang Bersih Dan Nyaman</div>
    </div>
  </div>
</div>

  </body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>