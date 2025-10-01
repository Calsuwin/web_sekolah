<?php $__env->startSection('title', 'Halaman Jurusan'); ?>
<style>
    .card-hover {
        transition: all 0.3s ease-in-out;
    }

    .card-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
</style>
<?php $__env->startSection('content'); ?>
    <section style="margin-top: 5rem;">
        <div class="container mb-4">
            <div class="row">
                <div class="col-12 mb-5 text-center" data-aos="fade-down" data-aos-duration="1200">
                    <h2 class="fw-bold mt-3">
                        Konsentrasi <br>
                        <span style="color: #FF6B6B;">Keahlian</span>
                    </h2>
                    <p class="text-muted">Kenali lebih dekat jurusan yang ada di sekolah kami</p>
                </div>
            </div>

            <div class="row g-4">
                <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="800">
                        <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden card-hover">
                            <div class="row g-0 h-100">
                                <!-- Gambar -->
                                <div class="col-md-4 bg-light d-flex align-items-center justify-content-center">
                                    <img src="<?php echo e(asset('storage/' . $jr->image)); ?>" alt="<?php echo e($jr->nama_jurusan); ?>"
                                        class="img-fluid rounded-3 m-3 shadow-sm"
                                        style="max-height: 180px; object-fit: cover;">
                                </div>

                                <!-- Isi -->
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold" style="color: #ff820d"><?php echo e($jr->nama_jurusan); ?></h5>
                                        <p class="text-muted small mb-2"><i class="bi bi-code-square"></i> Kode: <span
                                                class="fw-semibold"><?php echo e($jr->kode_jurusan); ?></span></p>
                                        <p class="text-muted small mb-2"><i class="bi bi-person-badge"></i> Kaprog:
                                            <?php echo e($jr->kaprog ?? '-'); ?></p>
                                        <p class="text-muted small mb-2"><i class="bi bi-award"></i> Akreditasi:
                                            <?php echo e($jr->akreditasi ?? '-'); ?></p>
                                        <p class="text-muted small mb-2"><i class="bi bi-people-fill"></i> Jumlah Siswa:
                                            <?php echo e($jr->jumlah_siswa); ?></p>
                                        <p class="mt-3 text-secondary"><?php echo e(Str::limit($jr->deskripsi, 120, '...')); ?></p>

                                        <a href="#" class="btn btn-sm btn-outline-warning rounded-pill mt-2">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/jurusan.blade.php ENDPATH**/ ?>