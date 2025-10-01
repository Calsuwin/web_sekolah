<?php $__env->startSection('title', ' Halaman Ekstrakurikuler'); ?>
<style>
    .card-hover {
        transition: all 0.3s ease-in-out;
    }

    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
</style>
<?php $__env->startSection('content'); ?>
    <section style="margin-top: 5rem;">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold">Ekstrakurikuler</h2>
                    <p class="text-muted">Kegiatan pilihan untuk mengembangkan minat dan bakat siswa</p>
                </div>
            </div>

            <div class="row g-4">
                <?php $__currentLoopData = $eskuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden card-hover p-4">
                            <!-- Gambar -->
                            <div class="eskul-img-wrapper text-center">
                                <img src="<?php echo e(asset('storage/' . $eskul->image)); ?>" width="200"
                                    alt="<?php echo e($eskul->nama_eskul); ?>" class="img-fluid">
                            </div>

                            <!-- Isi -->
                            <div class="card-body text-start">
                                <h5 class="fw-bold text-warning"><?php echo e($eskul->nama_eskul); ?></h5>
                                <p class="text-muted small mb-1"><i class="bi bi-code-square"></i> Kode:
                                    <?php echo e($eskul->kode_eskul); ?></p>
                                <p class="text-muted small mb-1"><i class="bi bi-person-badge"></i> Pembina:
                                    <?php echo e($eskul->pembina ?? '-'); ?></p>
                                <p class="text-muted small mb-1"><i class="bi bi-person-circle"></i> Ketua:
                                    <?php echo e($eskul->ketua ?? '-'); ?></p>
                                <p class="text-muted small mb-1"><i class="bi bi-calendar-event"></i> Jadwal:
                                    <?php echo e($eskul->jadwal ?? '-'); ?></p>
                                <p class="text-muted small mb-1"><i class="bi bi-geo-alt"></i> Lokasi:
                                    <?php echo e($eskul->lokasi_latihan ?? '-'); ?></p>
                                <p class="text-muted small"><i class="bi bi-people-fill"></i> Anggota:
                                    <?php echo e($eskul->jumlah_anggota); ?></p>
                                <p class="mt-3"><?php echo e(Str::limit($eskul->deskripsi, 100, '...')); ?></p>

                                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/eskul.blade.php ENDPATH**/ ?>