<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | Welcome</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="img/icon/icon 1.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Teko&display=swap"
      rel="stylesheet" />
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #f2f1ff;
      }

      .bg-cikling-dark-purple {
        background-color: #1e1b39 !important;
      }

      .font-brand {
        font-family: "Merienda";
      }
      .nav-item {
        margin-left: 15px;
        margin-right: 15px;
      }
      .btn-user {
        margin-left: 100px;
        background-color: transparent;
        border: 0;
      }

      .btn-nav {
        border-radius: 5px;
      }

      .btn-user:hover,
      .btn-nav:hover {
        background-color: #28244d;
      }

      .btn-user:active,
      .btn-user:focus,
      .btn-nav:active,
      .btn-nav:focus {
        background-color: #2a2652 !important;
      }

      .btn-logout {
        font-size: small;
        height: 37px;
      }

      .custom-card,
      .custom-card img {
        border-radius: 0 !important;
      }

      button {
        padding: 0;
      }

      .card-body h5:hover {
        color: #4a3aff;
        transition: 0.2s ease-in-out;
      }

      .font-subtitle {
        font-size: 35px;
        font-family: "Bebas Neue", sans-serif;
      }

      .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #1e1b39;
        border: none;
        color: #ffffff;
        text-align: center;
        font-size: 14px; /* Mengubah ukuran font menjadi 14px */
        padding: 5px 10px; /* Mengubah padding menjadi 5px atas dan bawah, 10px kiri dan kanan */
        width: auto; /* Mengubah lebar button menjadi otomatis sesuai dengan teks */
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: "\00bb";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -5px; /* Mengubah jarak dari teks ke ikon panah */
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 10px; /* Mengubah jarak dari teks ke ikon panah saat tombol dihover */
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }

      .img-height {
        height: 300px;
      }

      .flex-container {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
      }

      .card {
        margin-right: 10px; /* Jarak antara item */
      }

      /* Tampilan untuk perangkat dengan lebar layar maksimum 768px (misalnya tablet atau smartphone) */
      @media (max-width: 768px) {
        .carousel-item img {
          height: 150px;
        }
      }

      /* Tampilan untuk perangkat dengan lebar layar maksimum 576px (misalnya smartphone) */
      @media (max-width: 576px) {
        .carousel-item img {
          height: 150px;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-cikling-dark-purple">
      <div class="container d-flex justify-content-between">
        <a
          class="navbar-brand text-white font-brand"
          href="{{route('homepage')}}"
          style="margin: 0">
          <img src="img/Cikling.Com.png" alt="brand-logo" width="120" />
        </a>
        <div>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a
                class="nav-link active text-white nav-item btn-nav"
                aria-current="page"
                href="#playing-now"
                >Now Playing</a
              >
              <a
                class="nav-link text-white nav-item btn-nav"
                href="#coming-soon"
                >Coming Soon</a
              >
              <a class="nav-link text-white nav-item btn-nav" href="#movie-news"
                >Movie News</a
              >
            </div>
          </div>
        </div>
        <div>
          <div class="dropdown">
            <button
              class="btn btn-secondary dropdown-toggle btn-user"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="img/icon user.png" alt="icon user" width="30" />
            </button>
            <ul class="dropdown-menu">
              @if (auth()->check())
              <li>
                <a class="dropdown-item" href="/myprofile">Profile</a>
              </li>
              <li>
                <a href="/myticket" class="dropdown-item">My Ticket</a>
              </li>
              @endif

              @if(auth()->check() && auth()->user()->role === 'admin')
                  <li>
                      <a href="/table-pelanggan" class="dropdown-item" type="button">D-User</a>
                  </li>
                  <li> 
                      <a href="/tayang-admin" class="dropdown-item" type="button">D-Film</a>
                  </li>
              @endif

              <li>
                <hr class="dropdown-divider" />
              </li>
              @if(auth()->check())
              <li>
                <div class="container mb-2">
                  <a href="/logout" class="btn btn-danger btn-logout w-100" type="button">
                    Logout
                  </a>
                </div>
              </li>
              @else
              <li>
                <div class="container mb-2">
                  <a href="/login" class="btn btn-success btn-logout w-100" type="button">
                    Login
                  </a>
                </div>
              </li>
              @endif     
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Fast X.png" class="d-block w-100 object-fit-cover" height="400" alt="Fast X" />
        </div>
        <div class="carousel-item">
          <img src="img/SquidGame.png" class="d-block w-100 object-fit-cover" height="400" alt="Squid Game" />
        </div>
        <div class="carousel-item">
          <img src="img/Mario.png" class="d-block w-100 object-fit-cover" height="400" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Carousel -->

    <section class="playing-now">
      <!-- Playing Now -->
      <div class="container mt-5 text-center">
        <!-- H2 Subtittle -->
        <p class="h4 mb-4 font-subtitle" id="playing-now">Playing Now</p>
        <!-- End H2 Subtittle -->
        
        <div class="flex-container">
          @foreach ($movies as $key => $movie)
            @if ($key < 6)
              <!-- Card -->
              <a href="/movie/{{$movie->id}}" style="border: 0; text-decoration: none;">
                <div class="card custom-card border border-0" style="width: 200px; height: 410px">
                  <img src="film/{{$movie->poster}}" class="card-img-top object-fit-cover" style="object-fit: cover; width: 100%; height: 70%" alt="{{ $movie->poster }}" />
                  <div class="card-body text-center" style="background-color: #f2f1ff">
                    <h5 class="card-title">{{ $movie->judul_film }}</h5>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            @endif
          @endforeach
        </div>
      
        
        <div class="text-center">
          <a href="{{route('playing-now')}}" class="button"><span>View More</span></a>
        </div>
      </div>
      <!-- End Playing Now -->

      <!-- Coming Soon -->
      <div class="container mt-5 text-center">
        <!-- Subtitle -->
        <p class="h4 mb-4 font-subtitle" id="coming-soon">Coming Soon</p>
        <!-- End Subtitle -->


        <div class="flex-container">
          @foreach ($soon as $key => $movie)
            @if ($key < 6)
              <!-- Card -->
              <a href="/moviesoon/{{$movie['id']}}" style="border: 0; text-decoration: none;">
                <div class="card custom-card border border-0" style="width: 200px; height: 410px">
                  <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" class="card-img-top object-fit-cover" style="object-fit: cover; width: 100%; height: 70%" alt="{{ $movie['title'] }}" />
                  <div class="card-body text-center" style="background-color: #f2f1ff">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                  </div>
                </div>
              </a>
              <!-- End Card -->
            @endif
          @endforeach
        </div>
      
       
        <div class="text-center">
          <a href="{{route('coming-soon')}}" class="button"><span>View More</span></a>
        </div>
      </div>
      <!-- End Coming Soon -->

      <!-- Movie News -->
      <div class="container mt-5">
        <!-- Subtitle -->
        <p class="h4 mb-5 font-subtitle text-center" id="movie-news">
          Movie News
        </p>
        <!-- End Subtitle -->

        <!-- News Card -->
        <div class="row justify-content-start mt-5">
          <div class="col-6">
            <img
              src="img/kung-fu-panda_news.png"
              class="card-img-top object-fit-cover img-height"
              alt="" />
          </div>
          <div
            class="col-6 h-100 d-flex justify-content-center align-items-center">
            <div>
              <h3>
                <a
                  href=""
                  style="
                    text-decoration: none;
                    font-family: 'Teko', sans-serif;
                    color: black;
                    font-size: 35px;
                    text-align: start;
                  ">
                  Kung Fu Panda 4 Siap Tayang 2024
                </a>
              </h3>
              <p style="text-align: justify">
                Kisah Po, sang panda menggemaskan yang ahli bela diri, akan
                kembali hadir menghibur masyarakat. Pihak Universal sudah
                mengumumkan jika Kung Fu Panda 4 akan dirilis pada 8 Maret 2024
                setelah meraup sukses besar hingga 1,8 miliar USD lewat tiga
                film mereka. Baca artikel detikhot
              </p>
            </div>
          </div>
        </div>
        <!-- End News Card -->

        <!-- News Card -->
        <div class="row justify-content-start mt-5">
          <div class="col-6">
            <img
              src="img/asha.jpg"
              class="card-img-top object-fit-cover img-height"
              alt="" />
          </div>
          <div
            class="col-6 h-100 d-flex justify-content-center align-items-center">
            <div>
              <h3>
                <a
                  href=""
                  style="
                    text-decoration: none;
                    font-family: 'Teko', sans-serif;
                    color: black;
                    font-size: 35px;
                    text-align: start;
                  ">
                  Bintangi 'KAJIMAN: IBLIS TERKEJAM PENAGIH JANJI', Aghniny
                  Haque Akui Punya Kesamaan dengan Karakter Asha
                </a>
              </h3>
              <p style="text-align: justify">
                Nama Aghniny Haque sedang naik daun. Ia pun didapuk menjadi
                salah satu pemain dalam film KAJIMAN: IBLIS TERKEJAM PENAGIH
                JANJI. Ia dipercaya memerankan Asha. Dalam film hasil karya
                sutradara Adriyanto Dewo ini, Asha digambarkan sebagai anak
                perempuan yang sangat dekat dengan ibunya. Yang menarik, dalam
                kehidupan nyata rupanya Aghniny pun memiliki hubungan yang amat
                baik dengan ibundanya. “Kalau aku pulang ke Semarang, aku pasti
                bobo bareng ibu aku, walaupun ada kamar kosong. Sama seperti
                Asha, ya emang sehari-hari sama ibu. Kalau mau pergi, ya berdua
                juga,” ujar putri dari Asma Farida itu baru-baru ini.
              </p>
            </div>
          </div>
        </div>
        <!-- End News Card -->

        <!-- News Card -->
        <div class="row justify-content-start mt-5">
          <div class="col-6">
            <img
              src="img/zendayaxtimothee.jpg"
              class="card-img-top object-fit-cover img-height"
              alt="" />
          </div>
          <div
            class="col-6 h-100 d-flex justify-content-center align-items-center">
            <div>
              <h3>
                <a
                  href=""
                  style="
                    text-decoration: none;
                    font-family: 'Teko', sans-serif;
                    color: black;
                    font-size: 35px;
                    text-align: start;
                  ">
                  Sinopsis Film ‘DUNE: PART TWO’, Timothée Chalamet dan Zendaya
                  bersama Bangsa Fremen yang Menghadapi Pilihan Mustahil
                </a>
              </h3>
              <p style="text-align: justify">
                DUNE yang disutradarai oleh Denis Villeneuve dipuji sebagai
                salah satu film fiksi ilmiah paling inovatif yang pernah ada.
                Mengangkat cerita dari novel ikonik karya Frank Herbert, film
                ini menjadi sukses besar dan berhasil membuat para penggemar tak
                sabar menanti kelanjutan ceritanya. DUNE: PART TWO kembali
                diambil alih oleh Denis Villeneuve. Menceritakan kelanjutan
                perjalanan epik Paul Atreides melawan House Harkonnen.
              </p>
            </div>
          </div>
        </div>
        <!-- End News Card -->
      </div>
      <!-- End Movie News -->

      <!-- Coming Soon End -->
    </section>
    <!-- End Playing Now Section -->

    <footer class="mt-5">
      <nav class="navbar bg-cikling-dark-purple">
        <div class="d-flex justify-content-center w-100"> <!-- Menggunakan flexbox untuk membuat teks berada di tengah -->
          <p style="font-size: 10px; font-family:ssans serif" class="text-white d-flex my-auto">&copy; Cikling. All right reserved</p>
        </div>
      </nav>
    </footer>
    
    <script>
      // Menambahkan script JavaScript
      var carousel = new bootstrap.Carousel(document.getElementById('carouselExampleFade'), {
        interval: 3000 
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
