@extends('layouts.app')

@section('title', 'Halaman Galeri')

@section('content')
    <section style="margin-top:6rem">
        <div class="container-fluid bg-dark" style="margin-bottom:2rem" data-aos="fade-zoom" data-aos-duration="1000">
            <div class="row align-item-center">
                <div class="col-12 mb-4 text-center" data-aos="fade-zoom" data-aos-duration="1000">
                    <h4 class="fw-semibold mt-3 text-light">Foto Foto Kegiatan
                        <br>
                        <span class="text-secondary">DAN</span>
                        <br>
                        <span class="text-warning">Anomali Anomali</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="container bg-dark rounded-4" style="margin-bottom:5rem">
            <div class="row gap-0 justify-content-evenly">
                @foreach ($galeris as $galeri)
                    <div class="col-md-3 my-4">
                        <a data-fancybox="galeri" data-caption="{{ $galeri->nama_galeri }}"
                            href="{{ asset('storage/' . $galeri->image) }}">
                            <img src="{{ asset('storage/' . $galeri->image) }}"
                                class="img-fluid rounded shadow-sm img-hover" alt="{{ $galeri->nama_galeri }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
