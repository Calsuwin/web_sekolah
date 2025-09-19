<?php $__env->startSection('title', 'Halaman Galeri'); ?>

<?php $__env->startSection('content'); ?>
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
                <?php $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 my-4">
                        <a data-fancybox="galeri" data-caption="<?php echo e($galeri->nama_galeri); ?>"
                            href="<?php echo e(asset('storage/' . $galeri->image)); ?>">
                            <img src="<?php echo e(asset('storage/' . $galeri->image)); ?>"
                                class="img-fluid rounded shadow-sm img-hover" alt="<?php echo e($galeri->nama_galeri); ?>">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/galeri.blade.php ENDPATH**/ ?>