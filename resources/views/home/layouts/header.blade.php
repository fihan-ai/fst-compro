<header>
  <link rel="stylesheet" href="{{url ('CSS/header.css') }}">
  <!-- navbar header -->
  <nav class="navbar navbar-expand-lg navbar-custom d-flex justify-content-center">
    <div class="container">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/laporfst">UBB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/laporfst">Lapor Fst</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Peminjaman Gedung">Peminjaman Gedung</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/galeri">Galeri</a>
          </li>
        </ul>

        <!-- Form pencarian -->
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <img class="logo-ubb-vector-3-icon" alt="logo" src="img/LOGO-UBB-VECTOR 3.png">
  <div class="universitas-bangka-belitung-container">


    <p class="universitas"> <b>Universitas <br>
        Bangka Belitung</b>
    </p>
    <div class="vertical-line"></div>

  </div>

  <div class="fakultas-sains-dan-container">
    <p class="fakultas">Fakultas</p>
    <p class="fakultas">Sains dan Teknologi</p>
  </div>



  <!-- navbar kedua-->
  <nav class="navbar navbar-expand-lg navbar-custom2">
    <div class="container">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="/visimisi">Visi-Misi</a></li>
              <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
              <li><a class="dropdown-item" href="/strukturorganisasi">Struktur Organanisasi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita">Berita dan informasi</a><!-- buat routes fst -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pengumuman/">Pengumuman</a><!-- buat routes fst -->
          </li>
          <li>
            <a class="nav-link" href="">Layanan Kemahasiswaan</a><!-- buat routes fst -->
          </li>
        </ul>
        <form class="d-flex">
          <a href="/login" class="btn btn-primary">Login</a>
        </form>
      </div>
      <nav class="navbar navbar-light bg-light">
      </nav>
    </div>

  </nav>

</header>