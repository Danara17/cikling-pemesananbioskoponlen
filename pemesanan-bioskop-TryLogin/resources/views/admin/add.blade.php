<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | Add Film</title>
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
        font-size: 17px;
        padding: 10px 14px;
        width: auto;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        text-decoration: none;
      }

      .button-secondary {
        display: inline-block;
        border-radius: 4px;
        background-color: #4a3aff;
        border: none;
        color: #ffffff;
        text-align: center;
        font-size: 17px;
        padding: 10px 14px;
        width: auto;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        text-decoration: none;
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
        right: -5px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 10px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }

      .img-height {
        height: 300px;
      }

      .container td {
        word-wrap: break-word;
        overflow-wrap: break-word;
      }

      @media (max-width: 768px) {
        .carousel-item img {
          height: 150px;
        }
      }

      @media (max-width: 576px) {
        .carousel-item img {
          height: 150px;
        }
      }

      /* Additional CSS for centering text */
      .custom-table .poster {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .custom-table .poster img {
        max-height: 200px;
        width: auto;
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
          <img src="img/Cikling.Com.png" alt="brand-logo" width="120" />
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

    <div class="container mx-auto">
      <div class="d-flex justify-content-between">
        <a href="{{route('showTayang')}}" class="button mt-5">Back</a>
      </div>
      <hr class="hr" />

      <?php if(session('error')): ?>
            <div class="alert alert-danger mt-4">
                <strong>Error!</strong> <?php echo session('error'); ?>
            </div>
      <?php endif; ?>

        <form action="/add-tayang-post" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Film --}}  
            <div class="form-floating mb-3">
              <input type="text" name="judul_film" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Masukkan Nama Film</label>
            </div>

            {{-- Link YTB --}}  
            <div class="form-floating mb-3">
              <input type="text" name="link_ytb" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Masukkan Link Trailer</label>
            </div>

            {{-- Genre --}}
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect" required aria-label="Floating label select example" name="genre">              
                  <option value="action">Action</option>
                  <option value="horor">Horor</option>
                  <option value="triller">Triller</option>
                  <option value="comedy">Comedy</option> 
              </select>
              <label for="floatingSelect">Genre Apa film tersebut</label>
            </div>

            {{-- Poster --}}
            <div class="mb-3">
              <input class="form-control" name="poster" required type="file" id="formFile">
            </div>

            {{-- Sinopsis Film --}}
            <div class="form-floating mb-3">
              <textarea class="form-control" required name="sinopsis" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Sinopsis</label>
            </div>

            {{-- Durasi --}}
            <div class="form-floating mb-3">
              <input type="number" name="durasi" required class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Masukkan Durasi Film</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>

        </form>
    </div>
            
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
