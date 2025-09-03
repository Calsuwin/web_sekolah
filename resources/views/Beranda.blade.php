<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN4 TASIKMALAYA</title>
    <link rel="icon" href="{{ asset('storage/images/smk2.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('storage/css/aw.css') }}">

    <!-- CSS Eksternal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<style>
    /* Font default (isi website) */
    body {
        font-family: 'Montserrat', sans-serif;

    }

    .bg {
        background: url("{{ asset('storage/images/BG.png') }}") no-repeat top fixed;
        background-size: cover;
        padding-top: 2rem;
        position: relative;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.534);
        background-blend-mode: lighten;
        /* atau multiply */
    }

    /* Teks samping logo */
    .brand-text {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    #beranda {
        margin-top: 90px;
        /* sesuaikan tinggi navbar */
    }

    #carouselExampleControls {
        max-width: 1150px;
        /* ukuran carousel */
        border-radius: 10px;
        /* bikin sudut bulat */
        overflow: hidden;
        /* biar gambar ikut kebulatannya */
        margin: 0 auto;
        /* center */
    }

    #carouselExampleControls button {
        max-height: 100px;
        margin-top: 33vh;
    }

    .carousel-item img {
        height: 750px;
        width: 100%;
        transition: all 0.5s ease;
        object-fit: cover
    }

    .carousel-item img:hover {
        transform: scale(1.1);
        filter: brightness(80%);
    }

    .card-data {
        transition: transform 0.5s ease;
        /* animasi halus */
    }

    .card-data:hover {
        transform: scale(1.05);
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    }

    .carousel-caption:hover {
        text-decoration: underline;
    }

    .artikel {
        transition: transform 0.5s ease;
        /* animasi halus */
    }

    .artikel:hover {
        text-decoration: underline;
    }
</style>

<body>
    <section class="bg">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#beranda">
                    <img src="{{ asset('storage/images/smk.png') }}" alt="Logo" width="60">
                    <div class="d-flex flex-column lh-1 ms-3 brand-text">
                        <span>SMK NEGERI 4</span>
                        <span>TASIKMALAYA</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">
                                <span class="bi bi-house-fill"></span> Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Artikel</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Berita</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="#">Umum</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Sejarah</a></li>
                                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="#">Data Pokok</a></li>
                                <li><a class="dropdown-item" href="#">Data Statistik</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#jurusan">Jurusan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="beranda" class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/images/DSC09542 (2).jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block text-start bg-dark bg-opacity-75 p-4"
                            style="bottom:0; left:0; right:0;">
                            <p class="text-warning mb-1">JOB FAIR 2024</p>
                            <h4>
                                <a href="#" id="custom-text" class="text-white text-decoration-none">
                                    Judul Berita Ketiga
                                </a>
                            </h4>
                            <p class="mb-0">Deskripsi singkat berita ketiga...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/DSC09531 (1).jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block text-start bg-dark bg-opacity-75 p-4"
                            style="bottom:0; left:0; right:0;">
                            <p class="text-warning mb-1">JALAN SEHAT 2025</p>
                            <h4>
                                <a href="#" id="custom-text" class="text-white text-decoration-none">
                                    Judul Berita Ketiga
                                </a>
                            </h4>
                            <p class="mb-0">Deskripsi singkat berita ketiga...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/DSC_1162 (1).jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block text-start bg-dark bg-opacity-75 p-4"
                            style="bottom:0; left:0; right:0;">
                            <p class="text-warning mb-1">Foto bersama para Guru</p>
                            <h4>
                                <a href="#" id="custom-text" class="text-white text-decoration-none">
                                    Judul Berita Ketiga
                                </a>
                            </h4>
                            <p class="mb-0">Deskripsi singkat berita ketiga...</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning rounded" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-warning rounded" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- card --}}
        <div class="container">
            <div class="row data m-4 justify-content-center">
                <div class="card card-data rounded-0 shadow col-md-2 col-3 rounded-start bg-dark">
                    <div class="text-center m-3"><i class="bi bi-person-workspace text-light fs-1"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">82 Orang</p>
                        <p class="text-light m-0 deskripsi">Guru / Pendidik</p>
                        <a href="#guru" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card card-data rounded-0 shadow col-md-2 col-3 bg-dark">
                    <div class="text-center m-3"><i class="bi bi-people-fill text-light fs-1 bg-dark"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">1500 Orang</p>
                        <p class="text-light m-0 deskripsi">Siswa</p>
                        <a href="#siswa" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card card-data rounded-0 shadow col-md-2 col-3 bg-dark">
                    <div class="text-center m-3"><i class="bi bi-person-badge text-light fs-1 bg-dark"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">10 Orang</p>
                        <p class="text-light m-0 deskripsi">Staf TU</p>
                        <a href="#tu" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card card-data rounded-0 shadow col-md-2 col-3 rounded-end bg-dark">
                    <div class="text-center m-3"><i class="bi bi-lightbulb text-light fs-1"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">18</p>
                        <p class="text-light m-0 deskripsi">Ekstrakurikuler</p>
                        <a href="#eskul" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Artikel Section -->
        <section class="bg-light">
            <div class="container my-3">
                <div class="row">
                    <div class="col-md-12 text-start my-4">
                        <h2 class="fw-bold" data-aos="fade-up">Berita & Kegiatan</h2>
                        <hr class="mb-2" data-aos="fade-up">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/images/1.jpg') }}" class="img-fluid w-100 rounded"
                            style="height:350px; object-fit:cover;" data-aos="fade-up" alt="">
                    </div>
                    <div class="col-md-6 artikel" data-aos="fade-up">
                        <p class="text-muted">Juara Tingkat Kota</p>
                        <h4>Juara Lomba Kompetensi Siswa (LKS) TKJ tingkat sekota tasikmalaya</h4>
                        <small class="text-secondary">22 Agustus 2025, 10.45</small>
                        <p class="mt-2">Beberapa Siswa Memenangkan LKS tingkat sekota tasikmalaya </p>
                        <a href="#berita" class="stretched-link"></a>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4 artikel">
                        <div class="card h-100" data-aos="fade-right">
                            <img src="{{ asset('storage/images/2.jpg') }}" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" data-aos="fade-up" alt="">
                            <div class="card-body">
                                <p class="text-muted">Penelitian dan Inovasi</p>
                                <h5>Mampu Tingkatkan Efisiensi Pemupukan, UGM dan Bukit Asam...</h5>
                                <small class="text-secondary">21 Agustus 2025, 16.15</small>
                                <a href="#berita" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 artikel">
                        <div class="card h-100" data-aos="fade-up">
                            <img src="{{ asset('storage/images/6.jpg') }}" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" data-aos="fade-up" alt="">
                            <div class="card-body">
                                <p class="text-muted">Seminar/Workshop</p>
                                <h5>Meutya Hafid: Penetrasi Internet jadi Tantangan dalam...</h5>
                                <small class="text-secondary">21 Agustus 2025, 15.55</small>
                                <a href="#berita" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 artikel">
                        <div class="card h-100" data-aos="fade-left">
                            <img src="{{ asset('storage/images/4.jpg') }}" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" data-aos="fade-up" alt="">
                            <div class="card-body">
                                <p class="text-muted">Liputan/Berita</p>
                                <h5>Amerika Serikat Tarik Udang Impor Asal Indonesia...</h5>
                                <small class="text-secondary">21 Agustus 2025, 15.45</small>
                                <a href="#berita" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container my-4">
                <div class="row">
                    <div class="col-md-4 text-start my-2">
                        <h2 class="fw-bold" data-aos="fade-up">Pendidikan</h2>
                        <hr class="mb-2" data-aos="fade-up">
                    </div>
                    <div class="col-md-4 text-center my-2">
                        <h2 class="fw-bold" data-aos="fade-up">Prestasi</h2>
                        <hr class="mb-2" data-aos="fade-up">
                    </div>
                    <div class="col-md-4 text-center my-2">
                        <h2 class="fw-bold" data-aos="fade-up">Seputar SMKN 4</h2>
                        <hr class="mb-2" data-aos="fade-up">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-md-12 artikel" data-aos="fade-up">
                                <img src="{{ asset('storage/images/6.jpg') }}" class="img-fluid w-100 rounded"
                                    style="height:250px; object-fit:cover;" alt="">
                                <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h5>
                                <small class="text-secondary">25 05 2008</small>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/5.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/4.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem ipsum dolo.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-md-12 artikel" data-aos="fade-up">
                                <img src="{{ asset('storage/images/3.jpg') }}" class="img-fluid w-100 rounded"
                                    style="height:250px; object-fit:cover;" alt="">
                                <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h5>
                                <small class="text-secondary">25 05 2008</small>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/2.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/1.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem ipsum dolo.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-md-12 artikel" data-aos="fade-up">
                                <img src="{{ asset('storage/images/1.jpg') }}" class="img-fluid w-100 rounded"
                                    style="height:250px; object-fit:cover;" alt="">
                                <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h5>
                                <small class="text-secondary">25 05 2008</small>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/2.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                            <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                                <img src="{{ asset('storage/images/3.jpg') }}" class="img-fluid"
                                    style="width: 150px; height: 100px; object-fit:cover;" alt="">
                                <h6 class="ms-2">Lorem ipsum dolo.</h6>
                                <small class="text-secondary">25 05 2008</small> <br>
                                <a href="#pendidikan" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <footer id="aw" class="bg-dark text-white pt-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="fw-bold mb-3">SMKN 4 TASIKMALAYA</h5>
                        <p>Sekolah Menengah Kejuruan Negeri 4 Tasikmalaya, unggul dalam pendidikan vokasi dan karakter
                            bangsa.</p>
                        <p><i class="bi bi-geo-alt-fill me-2"></i>Jl Depok Kel. Sukamenak Kec. Purbaratu Kota
                            Tasikmalaya
                            46196.</p>
                        <p><i class="bi bi-telephone-fill me-2"></i>+62265312059</p>
                        <p><i class="bi bi-envelope-fill me-2"></i>info@smkn4tasikmalaya.sch.id</p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <h6 class="fw-semibold mb-3">Link Cepat</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Profil Sekolah</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Jurusan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Berita & Kegiatan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-semibold mb-3">Ikuti Kami</h6>
                        <a href="https://www.facebook.com/4smkn" target="_blank" class="text-white fs-4 me-3"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/smkn4tasik" target="_blank" class="text-white fs-4 me-3"><i
                                class="bi bi-twitter"></i></a>
                        <a href="https://instagram.com/smkn4tasikmalaya" target="_blank"
                            class="text-white fs-4 me-3"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="text-center pt-3 small">&copy; 2025 Azmi Yazid Mendra Kurnia. All rights reserved.</div>
            </div>
        </footer>
    </section>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
