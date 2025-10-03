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
            'bi-emoji-kiss', // Jurusan
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
        <section class="w-100 bg-light py-4 rounded-4">
            <div class="container">
                <div class="row align-items-center">

                    
                    <div class="col-12 mb-4" data-aos="fade-down" data-aos-duration="1000">
                        <h4 class="fw-bold mt-3">Sambutan
                            <br>
                            <span class="" style="color: #FAA533;">Kepala Sekolah</span>
                        </h4>
                    </div>

                    
                    <div class="col-md-4 text-center mb-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="rounded-4 d-flex align-items-center mb-4 pb-5 justify-content-center mx-auto"
                            style="width: 350px; height: 250px; background-color: #708993;">
                            <img src="<?php echo e(asset('storage/' . $greetings->photo)); ?>" alt="<?php echo e($greetings->name); ?>"
                                class="rounded pb-3" style="width: 300px; height: auto; object-fit: contain;">
                        </div>
                    </div>

                    
                    <div class="col-md-8" data-aos="fade-up" data-aos-duration="1200">
                        <h3 class="fw-bold my-1"><?php echo e($greetings->name); ?> <?php echo e($greetings->title); ?></h3>
                        <div class="text-secondary mt-4 my-4 fw-semibold" style="text-align: justify;">
                            <?php echo $greetings->content; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="py-5">
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <!-- Gambar -->
                <div class="col-md-6">
                    <img src="<?php echo e(asset('storage/DJI_20250922070907_0023_D.JPG')); ?>" class="img-fluid w-100"
                        style="height: 600px; object-fit:cover;" alt="SMKN 4 Tasikmalaya">
                </div>

                <!-- Teks -->
                <div class="col-md-6 ps-5" style="margin-top: 3rem;">
                    <h1 class="fw-bold" style="font-family: 'Playfair Display', serif; font-size:2.5rem; line-height:1.2;">
                        Kenapa Harus <br> SMK NEGERI 4 TASIKMALAYA?
                    </h1>

                    <p class="mt-4" style="font-family: 'Roboto', sans-serif; font-size:1rem; line-height:1.6;">
                        SMKN 4 Tasikmalaya adalah pilihan tepat untuk menyiapkan masa depan.
                        Dengan dukungan fasilitas modern, kurikulum terkini, dan lingkungan belajar yang kondusif,
                        sekolah ini membantu siswa berkembang baik secara akademis maupun keterampilan praktis.
                    </p>

                    <ul style="font-family: 'Roboto', sans-serif; font-size:1rem; line-height:1.8;">
                        <li>Fasilitas lengkap dengan laboratorium modern.</li>
                        <li>Guru berpengalaman dan kompeten di bidangnya.</li>
                        <li>Program keahlian sesuai kebutuhan industri.</li>
                        <li>Kerja sama luas dengan dunia usaha & dunia industri (DUDI).</li>
                        <li>Lingkungan belajar nyaman, kreatif, dan inovatif.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



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

    <div class="container-fluid" style="background-color:#FAB12F">
        <div class="container">
            <div class="row p-4">
                <div class="col-md-9 p-4 text-dark ">
                    <h3 class="fw-semibold" style="margin-right: 15%">"Terwujudnya lulusan yang Cerdas, Aktif, Kompetitif,
                        Adaptif dan
                        Produktif
                        berlandaskan Iman dan
                        Takwa"
                    </h3>
                </div>
                <div class="col-md-3 p-4 text-light" style="margin-top: 1.5rem;">
                    <a href="https://instagram.com/smkn4tasikmalaya" target="_blank" class="text-white fs-4 me-3">
                        <button type="button" class="btn btn-outline-warning text-dark fw-bold">Contact Us</button>
                    </a>
                </div>
            </div>
        </div>

    </div>

    
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
    <section class="bg-custom py-5">
        <div class="container">
            <div class="row g-3">
                <!-- TKJ -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3 d-flex align-items-center text-center">
                        <i class="bi bi-pc-display text-primary fs-1 mb-2"></i>
                        <h6 class="fw-semibold">Teknik Komputer & Jaringan (TKJ)</h6>
                    </div>
                </div>

                <!-- PPLG -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3 d-flex align-items-center text-center">
                        <i class="bi bi-code-slash text-success fs-1 mb-2"></i>
                        <h6 class="fw-semibold">Pengembangan Perangkat Lunak & Gim (PPLG)</h6>
                    </div>
                </div>

                <!-- TSM -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3 d-flex align-items-center text-center">
                        <i class="bi bi-tools text-danger fs-1 mb-2"></i>
                        <h6 class="fw-semibold">Teknik Sepeda Motor (TSM)</h6>
                    </div>
                </div>

                <!-- DKV -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3 d-flex align-items-center text-center">
                        <i class="bi bi-palette text-warning fs-1 mb-2"></i>
                        <h6 class="fw-semibold">Desain Komunikasi Visual (DKV)</h6>
                    </div>
                </div>

                <!-- TOI -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3 d-flex align-items-center text-center">
                        <i class="bi bi-cpu text-info fs-1 mb-2"></i>
                        <h6 class="fw-semibold">Teknik Otomasi Industri (TOI)</h6>
                    </div>
                </div>
            </div>

            <div class="row">

            </div>
        </div>
        <div class="container my-4 p-4 ">
            <div class="row">
                <!-- Form -->
                <div class="col-md-6">
                    <h3 class="fw-bold mb-4">Contact</h3>
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                        </div>
                        <small class="text-muted d-block mb-3">
                            *NB anda tidak perlu login untuk mengisi kritik dan saran
                        </small>
                        <button type="submit" class="btn btn-success px-4 rounded-pill">Kirim</button>
                    </form>
                </div>

                <!-- Info & Map -->
                <div class="col-md-6">
                    <h4 class="fw-bold">SMK Negeri 4 Tasikmalaya</h4>
                    <p>
                        📍 Jl. Depok, Sukamenak, Purbaratu, Kota Tasikmalaya, Jawa Barat 46196
                        <br> ☎ 0265-312059
                        <br> ✉ smkn4tsm@gmail.com
                    </p>
                    <div class="ratio ratio-4x3 rounded shadow">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.403361873904!2d108.19786697403386!3d-7.532904774323888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6592a3b6dfd66b%3A0x6b4f0d79f3e8f9e1!2sSMKN%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1727777777777!5m2!1sid!2sid"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\asmi\web_sekolah\resources\views/index.blade.php ENDPATH**/ ?>