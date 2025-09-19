<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Carousel -->
    <div id="beranda" class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                        <img src="<?php echo e(asset('storage/' . $carousel->image)); ?>" class="d-block w-100"
                            alt="<?php echo e($carousel->title); ?>">
                        <div class="carousel-caption d-blox text-start bg-dark bg-opacity-75 p-4"
                            style="bottom:0; left:0; right:0;">
                            <p class="text-warning mb-1 me-3"><?php echo e($carousel->title); ?></p>
                            <h4>
                                <a href="<?php echo e($carousel->link ?? '#'); ?>" id="custom-text"
                                    class="text-white text-decoration-none">
                                    <?php echo e($carousel->title); ?>

                                </a>
                            </h4>
                            <p class="mb-0"><?php echo e($carousel->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    
    <?php
        $icons = [
            'bi-person-workspace', // Guru
            'bi-people-fill', // Siswa
            'bi-person-badge', // TU
            'bi-lightbulb', // Ekstrakurikuler
        ];
    ?>

    <div class="container">
        <div class="row data m-4 justify-content-center">
            <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card card-data rounded-0 shadow col-sm-2 col-3 bg-dark">
                    <div class="text-center m-3">
                        <i class="bi <?php echo e($icons[$i] ?? 'bi-circle'); ?> text-light fs-1"></i>
                        <p class="fs-5 fw-semibold text-light mt-2 mb-0 total">
                            <?php echo e($stat->value); ?> Orang
                        </p>
                        <p class="text-light m-0 deskripsi">
                            <?php echo e($stat->title); ?>

                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php if($greetings): ?>
        <section class="w-100 bg-light py-4 rounded-4" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="row align-items-center">

                    
                    <div class="col-12 mb-4" data-aos="fade-down" data-aos-duration="1000">
                        <h4 class="fw-semibold mt-3">Sambutan
                            <br>
                            <span class="text-primary">Kepala Sekolah</span>
                        </h4>
                    </div>

                    
                    <div class="col-md-4 text-center mb-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="bg-secondary rounded-4 d-flex align-items-center mb-4 pb-5 justify-content-center mx-auto"
                            style="width: 350px; height: 250px;">
                            <img src="<?php echo e(asset('storage/' . $greetings->photo)); ?>" alt="<?php echo e($greetings->name); ?>"
                                class="rounded pb-3" style="width: 300px; height: auto; object-fit: contain;">
                        </div>
                    </div>

                    
                    <div class="col-md-8" data-aos="fade-up" data-aos-duration="1200">
                        <h3 class="fw-bold my-1"><?php echo e($greetings->name); ?> <?php echo e($greetings->title); ?></h3>
                        <div class="text-secondary mt-4 my-4" style="text-align: justify;">
                            <?php echo $greetings->content; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>



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
            <?php if($articles->count() > 0): ?>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <img src="<?php echo e(asset('storage/' . $articles[0]->image)); ?>" class="img-fluid w-100 rounded"
                            style="height:350px; object-fit:cover;" data-aos="fade-up" alt="<?php echo e($articles[0]->title); ?>">
                    </div>
                    <div class="col-md-6 artikel bg-light" data-aos="fade-up">
                        <p class="text-muted"><?php echo e($articles[0]->category); ?></p>
                        <h4><?php echo e($articles[0]->title); ?></h4>
                        <small class="text-secondary"><?php echo e($articles[0]->created_at->format('d F Y, H:i')); ?></small>
                        <p class="mt-2"><?php echo e(Str::limit($articles[0]->content, 120)); ?></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- artikel kecil -->
            <div class="row g-3">
                <?php $__currentLoopData = $articles->skip(1)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 artikel">
                        <div class="card h-100" data-aos="fade-up">
                            <img src="<?php echo e(asset('storage/' . $article->image)); ?>" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" data-aos="fade-up" alt="<?php echo e($article->title); ?>">
                            <div class="card-body">
                                <p class="text-muted"><?php echo e($article->category); ?></p>
                                <h5><?php echo e($article->title); ?></h5>
                                <small class="text-secondary"><?php echo e($article->created_at->format('d F Y, H:i')); ?></small>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


    
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
                            <img src="<?php echo e(asset('storage/images/6.jpg')); ?>" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" alt="">
                            <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h5>
                            <small class="text-secondary">25 05 2008</small>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/5.jpg')); ?>" class="img-fluid"
                                style="width: 150px; height: 100px; object-fit:cover;" alt="">
                            <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                            <small class="text-secondary">25 05 2008</small> <br>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/4.jpg')); ?>" class="img-fluid"
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
                            <img src="<?php echo e(asset('storage/images/3.jpg')); ?>" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" alt="">
                            <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h5>
                            <small class="text-secondary">25 05 2008</small>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/2.jpg')); ?>" class="img-fluid"
                                style="width: 150px; height: 100px; object-fit:cover;" alt="">
                            <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                            <small class="text-secondary">25 05 2008</small> <br>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/1.jpg')); ?>" class="img-fluid"
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
                            <img src="<?php echo e(asset('storage/images/1.jpg')); ?>" class="img-fluid w-100 rounded"
                                style="height:250px; object-fit:cover;" alt="">
                            <h5 class="mt-2 entry-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h5>
                            <small class="text-secondary">25 05 2008</small>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/2.jpg')); ?>" class="img-fluid"
                                style="width: 150px; height: 100px; object-fit:cover;" alt="">
                            <h6 class="ms-2">Lorem, ipsum dolor s.</h6>
                            <small class="text-secondary">25 05 2008</small> <br>
                            <a href="#pendidikan" class="stretched-link"></a>
                        </div>
                        <div class="col-md-12 artikel d-flex flex-row mb-3 artikel" data-aos="zoom-in">
                            <img src="<?php echo e(asset('storage/images/3.jpg')); ?>" class="img-fluid"
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/index.blade.php ENDPATH**/ ?>