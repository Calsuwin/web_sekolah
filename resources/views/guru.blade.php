<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
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
              <a class="nav-link active" aria-current="page" href="{{ route('guru') }}">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('siswa') }}">Siswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-5">
      <h1 class="mb-4 text-center">Daftar Guru</h1>
      <div class="row g-4">
        @foreach($gurus as $guru)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 shadow">
            <img src="{{ asset('storage/' . $guru->image) }}" class="card-img-top" alt="{{ $guru->nama_guru }}" style="height: 220px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">{{ $guru->nama_guru }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $guru->kode_guru }} | {{ $guru->mapel }}</h6>
              <p class="card-text">{{ $guru->deskripsi }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @if($gurus->isEmpty())
        <div class="alert alert-info mt-4 text-center">Belum ada data guru.</div>
      @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>