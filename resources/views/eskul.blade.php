@extends('layouts.app')

@section('title', ' Halaman Ekstrakurikuler')
<style>
    .card-hover {
        transition: all 0.3s ease-in-out;
    }

    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
</style>
@section('content')
    <section style="margin-top: 5rem;">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold">Ekstrakurikuler</h2>
                    <p class="text-muted">Kegiatan pilihan untuk mengembangkan minat dan bakat siswa</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($eskuls as $eskul)
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden card-hover p-4">
                            <!-- Gambar -->
                            <div class="eskul-img-wrapper text-center">
                                <img src="{{ asset('storage/' . $eskul->image) }}" width="200"
                                    alt="{{ $eskul->nama_eskul }}" class="img-fluid">
                            </div>

                            <!-- Isi -->
                            <div class="card-body text-start">
                                <h5 class="fw-bold text-warning">{{ $eskul->nama_eskul }}</h5>
                                <p class="text-muted small mb-1"><i class="bi bi-code-square"></i> Kode:
                                    {{ $eskul->kode_eskul }}</p>
                                <p class="text-muted small mb-1"><i class="bi bi-person-badge"></i> Pembina:
                                    {{ $eskul->pembina ?? '-' }}</p>
                                <p class="text-muted small mb-1"><i class="bi bi-person-circle"></i> Ketua:
                                    {{ $eskul->ketua ?? '-' }}</p>
                                <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> Jadwal:
                                    {{ $eskul->jadwal ?? '-' }}</p>
                                <p class="text-muted small mb-1"><i class="bi bi-geo-alt"></i> Lokasi:
                                    {{ $eskul->lokasi_latihan ?? '-' }}</p>
                                <p class="text-muted small"><i class="bi bi-people-fill"></i> Anggota:
                                    {{ $eskul->jumlah_anggota }}</p>
                                <p class="mt-3">{{ Str::limit($eskul->deskripsi, 100, '...') }}</p>

                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
