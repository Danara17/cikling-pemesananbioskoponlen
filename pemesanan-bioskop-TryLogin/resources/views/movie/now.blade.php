<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | Playing-now</title>
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
    <script
      src="https://kit.fontawesome.com/d508860b60.js"
      crossorigin="anonymous"></script>
    <style>
      body {
        height: 100%;
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
        font-size: 16px; /* Mengubah ukuran font menjadi 16px */
        padding: 8px 16px; /* Mengubah padding menjadi 8px atas dan bawah, 16px kiri dan kanan */
        width: auto; /* Mengubah lebar button menjadi otomatis sesuai dengan teks */
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        position: relative;
        overflow: hidden;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        z-index: 1;
      }

      .button span:before {
        content: "\00ab";
        position: absolute;
        opacity: 0;
        top: 0;
        left: -20px; /* Mengubah jarak dari teks ke ikon panah */
        transition: 0.5s;
      }

      .button:hover span {
        padding-left: 14px; /* Mengubah jarak dari teks ke ikon panah saat tombol dihover */
      }

      .button:hover span:before {
        opacity: 1;
        left: 0;
      }

      .img-height {
        height: 300px;
      }

      .btn-app-primary {
        background-color: #4a3aff;
        color: white;
      }

      .card-button {
        border: 0;
        margin-right: 9.1px;
        margin-left: 9.1px;
      }

      /* Tampilan untuk perangkat dengan lebar layar maksimum 768px (misalnya tablet atau smartphone) */
      @media (max-width: 768px) {
        .card {
          width: 33.33%;
          max-width: 200px;
          height: 410px;
          margin-bottom: 10px;
        }
      }

      /* Tampilan untuk perangkat dengan lebar layar maksimum 576px (misalnya smartphone) */
      @media (max-width: 576px) {
        .card {
          width: 50%;
          max-width: 200px;
          height: 410px;
          margin-bottom: 10px;
        }
      }

      /* Tampilan default untuk perangkat dengan lebar layar lebih besar dari 768px */
      .card {
        width: 16.66%;
        max-width: 200px;
        height: 410px;
        margin-bottom: 10px;
      }

    </style>
  </head>
  <body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-cikling-dark-purple">
      <div class="container d-flex justify-content-between">
        <a
          class="navbar-brand text-white font-brand"
          href="/"
          style="margin: 0">
          <img src="{{asset('img/Cikling.Com.png')}}" alt="brand-logo" width="120" />
        </a>
        <div>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-white nav-item btn-nav" href="#">
                Selamat Datang @if(auth()->check()) {{auth()->user()->username}} ! @endif           
              </a>
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
              <img src="{{asset('img/icon user.png')}}" alt="icon user" width="30" />
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

    <div class="container" style="height: 100%">
      <a href="{{route('homepage')}}" class="button mt-5"><span>Back</span></a>
      <hr class="hr" />
      <p class="h4 mb-4 font-subtitle mt-3" id="playing-now">Playing Now</p>

      <style>
        .card-button {
          flex: 0 0 110px;
        }
      
        .card-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
        }
      </style>
      
            
      <div class="card-container">
        @foreach ($movie as $index => $film)
          <div class="card-button"
            @if ($index % 6 == 0)
              style="margin-left: 0 !important"
            @elseif (($index + 1) % 6 == 0)
              style="margin-right: 0 !important"
            @endif>       
            <a href="/movie/{{ $film->id }}" style="text-decoration: none">
              <div class="card custom-card border border-0" style="width: 200px; height: 410px; margin-bottom: 0">
                <img src="film/{{ $film->poster }}" class="card-img-top object-fit-cover" style="object-fit: cover; width: 100%; height: 70%" alt="Fast-X" />
                <div class="card-body text-center" style="background-color: #f2f1ff">
                  <h5 class="card-title">{{ $film->judul_film }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div> 

    </div>

    <footer class="">
        <nav class="navbar bg-cikling-dark-purple">
          <div class="d-flex justify-content-center w-100"> <!-- Menggunakan flexbox untuk membuat teks berada di tengah -->
            <p style="font-size: 10px; font-family:ssans serif" class="text-white d-flex my-auto">&copy; Cikling. All right reserved</p>
          </div>
        </nav>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
