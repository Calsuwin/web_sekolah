@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Carousel -->
    <div id="beranda" class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $key => $carousel)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100"
                            alt="{{ $carousel->title }}">
                        <div class="carousel-caption d-blox text-start bg-dark bg-opacity-75 p-4"
                            style="bottom:0; left:0; right:0;">
                            <p class="text-warning mb-1 me-3">{{ $carousel->title }}</p>
                            <h4>
                                <a href="{{ $carousel->link ?? '#' }}" id="custom-text"
                                    class="text-white text-decoration-none">
                                    {{ $carousel->title }}
                                </a>
                            </h4>
                            <p class="mb-0">{{ $carousel->description }}</p>
                        </div>
                    </div>
                @endforeach
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

    {{-- array untuk diambil icon nyah --}}
    @php
        $icons = [
            'bi-person-workspace', // Guru
            'bi-people-fill', // Siswa
            'bi-person-badge', // TU
            'bi-lightbulb', // Ekstrakurikuler
        ];
    @endphp

    <div class="container">
        <div class="row data m-4 justify-content-center">
            @foreach ($statistics as $i => $stat)
                <div class="card card-data rounded-0 shadow col-md-2 col-3 bg-dark">
                    <div class="text-center m-3">
                        <i class="bi {{ $icons[$i] ?? 'bi-circle' }} text-light fs-1"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">
                            {{ $stat->value }} Orang
                        </p>
                        <p class="text-light m-0 deskripsi">
                            {{ $stat->title }}
                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if ($greetings)
        <section class="w-100 bg-light py-4 rounded-4" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="row align-items-center">

                    {{-- Judul di atas --}}
                    <div class="col-12 mb-4" data-aos="fade-down" data-aos-duration="1000">
                        <h4 class="fw-semibold mt-3">Sambutan
                            <br>
                            <span class="text-primary">Kepala Sekolah</span>
                        </h4>
                    </div>

                    {{-- Foto Kepala Sekolah --}}
                    <div class="col-md-4 text-center mb-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="bg-secondary rounded-4 d-flex align-items-center mb-4 pb-5 justify-content-center mx-auto"
                            style="width: 350px; height: 250px;">
                            <img src="{{ asset('storage/' . $greetings->photo) }}" alt="{{ $greetings->name }}"
                                class="rounded pb-3" style="width: 300px; height: auto; object-fit: contain;">
                        </div>
                    </div>

                    {{-- Isi Sambutan --}}
                    <div class="col-md-8" data-aos="fade-up" data-aos-duration="1200">
                        <h3 class="fw-bold my-1">{{ $greetings->name }} {{ $greetings->title }}</h3>
                        <div class="text-secondary mt-4 my-4" style="text-align: justify;">
                            {!! $greetings->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



    <!-- Artikel Section -->
    <section class="w-100 py-4">
        <div class="container">
            <!-- judul -->
            <div class="row">
                <div class="col-md-12 text-start my-4">
                    <h2 class="fw-bold" data-aos="fade-up">Berita & Kegiatan</h2>
                    <hr class="mb-2" data-aos="fade-up">
                </div>
            </div>

            <!-- artikel utama -->
            @if ($articles->count() > 0)
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $articles[0]->image) }}" class="img-fluid w-100 rounded"
                            style="height:350px; object-fit:cover;" data-aos="fade-up" alt="{{ $articles[0]->title }}">
                    </div>
                    <div class="col-md-6 artikel bg-light" data-aos="fade-up">
                        <p class="text-muted">{{ $articles[0]->category }}</p>
                        <h4>{{ $articles[0]->title }}</h4>
                        <small class="text-secondary">{{ $articles[0]->created_at->format('d F Y, H:i') }}</small>
                        <p class="mt-2">{{ Str::limit($articles[0]->content, 120) }}</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            @endif

            <!-- artikel kecil -->
            <div class="row g-3">
                @foreach ($articles->skip(1)->take(3) as $article)
                    <div class="col-md-4 artikel">
                        <div class="card h-100" data-aos="fade-up">
                            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" data-aos="fade-up" alt="{{ $article->title }}">
                            <div class="card-body">
                                <p class="text-muted">{{ $article->category }}</p>
                                <h5>{{ $article->title }}</h5>
                                <small class="text-secondary">{{ $article->created_at->format('d F Y, H:i') }}</small>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


{{--  --}}
    <section class="w-100 bg-light py-4">
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
