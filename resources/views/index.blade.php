@extends('layouts.app')

@section('title', 'Home')

@section('content')
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
    <section class="w-100 bg-light py-4">
        <div class="container">
            <!-- isi konten di sini -->
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

    <section class="w-100 bg-light py-4">
        <div class="container">
            <!-- isi konten di sini -->
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
@endsection
