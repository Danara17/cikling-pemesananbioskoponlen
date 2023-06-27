<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | My Ticket</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="{{asset('img/icon/icon 1.png')}}" />
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
        margin-right: 10px;
        margin-left: 10px;
      }

      div.scroll-container {
        /* background-color: #333; */
        overflow-x: scroll;
        overflow-y: hidden;
        white-space: nowrap;
        height: 350px;
        /* padding: 10px; */
      }

      div.scroll-content {
        display: flex;
      }

      div.scroll-container .card {
        flex-shrink: 0;
        width: 18rem;
        height: 300px;
        margin-right: 10px;
      }

      div.scroll-container img {
        padding: 10px;
      }
      .scroll-container {
        overflow: auto;
        scrollbar-width: thin; /* Untuk browser non-Chromium */
        scrollbar-color: transparent transparent; /* Untuk browser non-Chromium */
      }

      /* Untuk browser Chromium (misalnya Google Chrome) */
      .scroll-container::-webkit-scrollbar {
        width: 6px;
      }

      .scroll-container::-webkit-scrollbar-track {
        background: transparent;
      }

      .scroll-container::-webkit-scrollbar-thumb {
        background-color: transparent;
      }


      /* Tampilan untuk perangkat dengan lebar layar maksimum 768px (misalnya tablet atau smartphone) */
      @media (max-width: 768px) {
        .card {
          width: 33.33%;
          /* max-width: 200px; */
          /* height: 410px; */
          margin-bottom: 10px;
        }
      }

      /* Tampilan untuk perangkat dengan lebar layar maksimum 576px (misalnya smartphone) */
      @media (max-width: 576px) {
        .card {
          width: 50%;
          /* max-width: 200px; */
          /* height: 410px; */
          margin-bottom: 10px;
        }
      }

      /* Tampilan default untuk perangkat dengan lebar layar lebih besar dari 768px */
      .card {
        width: 16.66%;
        /* max-width: 200px; */
        /* height: 410px; */
        margin-bottom: 10px;
      }

       .actor-section {
        text-align: center;
        margin-top: 20px;
        overflow-x: auto;
        white-space: nowrap;
    }

    .actors-title {
        margin-bottom: 10px;
    }

    .actors-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 0 10px;
    }

    .actor-container {
        margin-right: 10px;
        text-align: center;
    }

    .actor-image {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        border: 2px solid #ddd;
        border-radius: 8px;
        width: 180px;
        height: 100%;
        transition: transform 0.3s ease-in-out;
        display: block;
    }

    .actor-name {
        margin-top: 5px;
    }

    .actor-image:hover {
        transform: scale(1.05);
    }

    .actor-name {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    
    #style-2::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar
    {
      width: 12px;
      background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar-thumb
    {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #000000;
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

    {{-- Content --}}
    <div class="container mt-5">
        @foreach($theTicket as $index => $item)
        <div class="card shadow mt-2 mb-4 w-100"> <!-- Tambahkan kelas w-100 -->
            <div class="card-header py-3">
                <h5>{{$item->jadwalTayang->film->judul_film}} | ({{$item->jadwalTayang->tanggal_tayang}} / {{$item->jadwalTayang->waktu_tayang}})</h5>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-5 d-flex justify-content-center">
                        <img src="film/{{$item->jadwalTayang->film->poster}}" class="img-fluid img-thumbnail" alt="" width="130" />
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <!-- <span style="font-weight: bolder; text-align: center">Price :</span> -->
                        <div style="font-size: 23px; font-weight: bold" class="px-3">Jumlah Kursi : {{$item->jumlah_tiket}} </div>
                        {{-- <div style="font-size: 15px" class="px-3">Total Bayar  : Rp. {{number_format($item->jadwalTayang->harga_tiket,0,',','.')}}</div> --}}
                    </div>
                </div>
                <hr class="hr">
                <div class="d-flex justify-content-center">
                    <h2>
                        Total Bayar : Rp. {{number_format($item->jadwalTayang->harga_tiket,0,',','.')}}
                    </h2>
                </div>
                <hr class="hr" />
                <div class="row">
                    <div class="col">
                        <button class="mt-2 w-100 btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                                <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                                <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                                <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                                <path d="M12 9h2V8h-2v1Z"/>
                              </svg>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Scan Me</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                      <img src="barcode/frame.png" alt="">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>





    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
