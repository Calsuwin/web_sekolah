<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN4 TASIKMALAYA</title>
    <link rel="icon" href="<?php echo e(asset('storage/images/smk2.png')); ?>" type="image/png">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <!-- CSS Eksternal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet">


</head>

<body>
    <section class="bg">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #2F5755;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="<?php echo e(route('index')); ?>">
                    <img src="<?php echo e(asset('storage/images/smk.png')); ?>" alt="Logo" width="60">
                    <div class="d-flex flex-column lh-1 ms-3 brand-text">
                        <span>SMK NEGERI 4</span>
                        <span>TASIKMALAYA</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('index')); ?>">
                                <span class="bi bi-house-fill"></span> Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo e(request()->is('profil*') ? 'active' : ''); ?>"
                                href="<?php echo e(route('profil.index')); ?>">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?php echo e(request()->is('profil/sejarah') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('profil.sejarah')); ?>">Sejarah</a></li>
                                <li><a class="dropdown-item <?php echo e(request()->is('profil/visi-misi') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('profil.visi-misi')); ?>">Visi & Misi</a></li>
                                <li><a class="dropdown-item <?php echo e(request()->is('profil/data-pokok') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('profil.data-pokok')); ?>">Data Pokok</a></li>
                                <li><a class="dropdown-item <?php echo e(request()->is('profil/data-statistik') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('profil.data-statistik')); ?>">Data Statistik</a></li>
                            </ul>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('eskul') ? 'active' : ''); ?>"
                                href="<?php echo e(route('eskul')); ?>">
                                Ekstrakurikuler
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('jurusan') ? 'active' : ''); ?>"
                                href="<?php echo e(route('jurusan')); ?>">
                                Jurusan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request()->routeIs('galeri') ? 'active' : ''); ?>"
                                href="<?php echo e(route('galeri')); ?>">
                                Galeri
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
<?php /**PATH C:\laragon\www\web_sekolah\resources\views/layouts/header.blade.php ENDPATH**/ ?>