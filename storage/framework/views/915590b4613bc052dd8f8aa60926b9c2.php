<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;" data-bs-theme="dark">
        <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
        <img src="<?php echo e(asset('storage/corasuel/Logo_SMK_Negeri_4_Tasikmalaya.png')); ?>" alt="Logo" width="74" height="74" class="d-inline-block align-text-top">
        <span class="ms-2" style="font-size: calc(50px * 0.4);"></span>
      </a>
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('beranda')); ?>">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo e(route('profil')); ?>">Profil Sekolah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('ekstrakurikuler')); ?>">Ekstrakurikuler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('jurusan')); ?>">Jurusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('guru')); ?>">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('siswa')); ?>">Siswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="<?php echo e(asset('storage/corasuel/Logo_SMK_Negeri_4_Tasikmalaya.png')); ?>" alt="Logo SMKN 4 Tasikmalaya" class="img-fluid rounded shadow" style="max-width: 220px;">
        </div>
        <div class="col-md-8">
          <h2 class="fw-bold">Profil SMK Negeri 4 Tasikmalaya</h2>
          <p class="mt-3" style="font-size: 1.1rem;">
            SMK Negeri 4 Tasikmalaya adalah sekolah menengah kejuruan unggulan yang berlokasi di Kota Tasikmalaya. Sekolah ini memiliki berbagai jurusan favorit seperti PPLG, TBSM, TKJT, dan lainnya. Dengan fasilitas lengkap, lingkungan yang nyaman, serta tenaga pengajar profesional, SMKN 4 Tasikmalaya berkomitmen mencetak lulusan yang siap kerja dan berdaya saing tinggi.
          </p>
          <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item bg-transparent">🏫 Alamat: Jl. Depok, Sukamenak, Purbaratu, Kota Tasikmalaya</li>
            <li class="list-group-item bg-transparent">📞 Telepon: (0265) 123456</li>
            <li class="list-group-item bg-transparent">🌐 Website: <a href="https://smkn4tasikmalaya.sch.id" target="_blank">smkn4tasikmalaya.sch.id</a></li>
            <li class="list-group-item bg-transparent">✉️ Email: info@smkn4tasikmalaya.sch.id</li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12">
          <h4 class="fw-semibold mb-3">Fasilitas Unggulan</h4>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <img src="<?php echo e(asset('storage/corasuel/main (2).jpg')); ?>" class="gallery-img rounded" alt="Lab Komputer">
          <div class="text-center">Lab Komputer Modern</div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <img src="<?php echo e(asset('storage/corasuel/lapang2.jpg')); ?>" class="gallery-img rounded" alt="Lapangan">
          <div class="text-center">Lapangan Olahraga</div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <img src="<?php echo e(asset('storage/corasuel/mesjid1.jpg')); ?>" class="gallery-img rounded" alt="Masjid">
          <div class="text-center">Masjid Sekolah</div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <img src="<?php echo e(asset('storage/corasuel/Dokumen-1.jpeg')); ?>" class="gallery-img rounded" alt="Perpustakaan">
          <div class="text-center">Perpustakaan</div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html><?php /**PATH C:\laragon\www\UKK_PPLG2_AZMI\resources\views/Profil.blade.php ENDPATH**/ ?>