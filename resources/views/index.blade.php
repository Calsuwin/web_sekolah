<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
      rel="stylesheet">

    <!-- Google Fonts (Poppins) -->
    <link 
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" 
      rel="stylesheet">

    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .navbar-brand span {
        font-weight: 600;
        letter-spacing: 0.5px;
      }
      .nav-link {
        font-weight: 500;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img 
            src="{{ asset('storage/images/smk.png') }}" 
            alt="Logo" 
            width="45">
          <div class="d-flex flex-column lh-1 ms-2">
            <span>SMK NEGERI 4</span>
            <span>TASIKMALAYA</span>
          </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarText" aria-controls="navbarText" 
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#Tentang">Tentang SMKN4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Penghargaan">Penghargaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Guru">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Ruangan">Ruangan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1>Hello, world!</h1>
    <h1>Hello, world!</h1>
    <h1>Hello, world!</h1>
    <h1>Hello, world!</h1>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
