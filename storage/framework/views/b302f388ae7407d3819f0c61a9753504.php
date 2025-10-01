<?php $__env->startSection('title', 'Halaman Galeri'); ?>
<style>
    .gallery-item {
        transition: transform 0.3s ease-in-out;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-item .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }
</style>
<?php $__env->startSection('content'); ?>
    <section style="margin-top:6rem">
        <div class="container-fluid bg-dark py-5" data-aos="fade-zoom" data-aos-duration="1000">
            <div class="row align-item-center">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-light">
                        Foto Kegiatan <br>
                        <span class="text-secondary">dan</span>
                        <span class="text-warning">Anomali</span>
                    </h2>
                    <p class="text-light mt-2">Kumpulan momen terbaik yang berhasil diabadikan</p>
                </div>
            </div>
        </div>

        <div class="container bg-dark rounded-4 p-2 shadow-lg" style="margin-top: 3rem; margin-bottom: 3rem;">
            <div class="row g-4 justify-content-center">
                <?php $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6">
                        <a data-fancybox="galeri" data-caption="<?php echo e($galeri->nama_galeri); ?>"
                            href="<?php echo e(asset('storage/' . $galeri->image)); ?>">
                            <div class="gallery-item position-relative overflow-hidden rounded-4 shadow-sm">
                                <img src="<?php echo e(asset('storage/' . $galeri->image)); ?>" class="img-fluid w-100 h-100"
                                    alt="<?php echo e($galeri->nama_galeri); ?>" style="object-fit: cover; height: 250px;">
                                <!-- Overlay -->
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <span class="text-white fw-semibold"><?php echo e($galeri->nama_galeri); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/galeri.blade.php ENDPATH**/ ?>