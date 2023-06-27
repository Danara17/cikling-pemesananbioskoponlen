<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | Show Film</title>
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
        <a href="/" class="button mt-5">Back</a>
        <a href="{{route('showAddTayang')}}" class="button-secondary mt-5"
          ><i class="fa-solid fa-plus" style="margin-right: 10px"></i>Tambah
          Film</a
        >
      </div>
      <hr class="hr" />
      <?php if(session('success')): ?>
            <div class="alert alert-success mt-4">
                <strong>Sukses!</strong> <?php echo session('success'); ?>
            </div>
      <?php endif; ?>

      <?php if(session('error')): ?>
            <div class="alert alert-danger mt-4">
                <strong>Error!</strong> <?php echo session('error'); ?>
            </div>
      <?php endif; ?>

      <div class="mt-2 mb-2">
        <form action="/tayang-admin" method="get">
          @csrf
          <input type="search" name="search" class="form-control w-25" id="exampleFormControlInput1" placeholder="Search here ...">
        </form>
      </div>
      <table
        class="table text-center table-stripped table-hover table-light custom-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar Film</th>
            <th scope="col">Judul Film</th>
            <th scope="col">link</th>
            <th scope="col">Genre</th>
            <th scope="col">Durasi</th>
            <th scope="col">Atur Tayang</th>
            <th scope="col">Operasi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($getFilm as $index => $item)
          <tr class="">
            <th scope="row" style="vertical-align: middle; text-align: center">
              {{ $index + $getFilm->firstItem() }}
            </th>
            <td class="poster">
              <img src="film/{{$item->poster}}" width="300" height="350" class="img-fluid object-fit-contain" alt="" />
            </td>
            <td style="vertical-align: middle; text-align: center">
              <span>{{$item->judul_film}}</span>
            </td>
            <td style="vertical-align: middle; text-align: center">                         
                <a href="{{$item->link_ytb}}">{{$item->link_ytb}}</a>                                        
            </td>
            <td style="vertical-align: middle; text-align: center">
              {{$item->genre}}
            </td>
            <td style="vertical-align: middle; text-align: center">
              {{$item->durasi}} minute
            </td>

            <td style="vertical-align: middle; text-align: center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                atur jadwal
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <form action="/tambah-tayang/{{$item->id}}" method="get">
                    @csrf
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h4>{{$item->judul_film}}</h4>
                        <input type="text" value="{{$item->id}}" name="id" hidden>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                          <input type="datetime-local" class="form-control" name="tanggal_tayang" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Atur Harga (Rp.)</label>
                          <input type="text" name="harga_tiket" class="form-control" id="exampleInputPassword1">
                        </div>    
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Jadwalkan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </td>

            <td style="vertical-align: middle; text-align: center">
              <a href="/edit-tayang/{{$item->id}}" class="btn btn-success">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a href="/delete-tayang/{{$item->id}}" class="btn btn-danger">
                <i class="fa-sharp fa-solid fa-trash"></i>
              </a>
            </td>
          </tr>
          @endforeach
                    
        </tbody>
      </table>

      <div class="d-flex justify-content-center mt-5">
        {{ $getFilm->links() }}
      </div>
    

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
