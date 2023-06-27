<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | {{$judul}}</title>
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

    <div class="container">
      <a href="{{ url()->previous() }}" class="button mt-5"><span>Back</span></a>
      <hr class="hr" />
      <?php if(session('success')): ?>
            <div class="alert alert-success mt-4">
                <strong>Sukses!</strong> <?php echo session('success'); ?>
            </div>
      <?php endif; ?>
      <?php if(session('error')): ?>
            <div class="alert alert-danger mt-4">
                <strong>Sukses!</strong> <?php echo session('error'); ?>
            </div>
      <?php endif; ?>
      <?php if(session('warning')): ?>
            <div class="alert alert-warning mt-4">
                <strong>Sukses!</strong> <?php echo session('warning'); ?>
            </div>
      <?php endif; ?>
      <div class="row mt-5">
        <div class="col-4 text-center">
          <img
          src="{{ asset('film/' . $poster) }}"
          width="280"
          height="420"
          alt=""
          class="object-fit-cover" style="box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);
          -webkit-box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);
          -moz-box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);"/>
        </div>

        <div class="col-8">
          <form action="/proses-pemesanan" method="get">
            @csrf
            {{-- Tanggal --}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal yang anda Pilih</label>
              <input type="text" name="tanggal" value="{{$tanggal}}" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            {{-- jam --}}
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jam Tayang</label>
              <input type="text" name="jam" value="{{$jam}}" readonly class="form-control" id="exampleInputPassword1">
            </div>
            
           {{-- Pesan Tiket --}}
            <div class="mb-3">
              <label for="jumlahKursi" class="form-label">Ambil Kursi (kursi yang tersedia : {{$kuota}})</label>
              <input type="number" name="pesan" class="form-control"  id="jumlahKursi" min="0" onchange="hitungTotalHarga()">
            </div>

            <h5 id="detailPembelian">0 Kursi</h5>
            <h5 id="totalHarga">Total Harga : Rp. 0</h5>

            <input type="text" id="harga" name="harga" value="{{$harga}}" hidden>
            <input type="text" name="jadwal_id" value="{{$jadwalID}}" hidden>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Checkout
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin untuk memesan kursi ini?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Pesan Kursi</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <script>
      function hitungTotalHarga() {
        var hargaPerKursi = parseFloat(document.getElementById('harga').value);
        var jumlahKursiInput = parseFloat(document.getElementById('jumlahKursi').value);
        var totalHarga = hargaPerKursi * jumlahKursiInput;
        var rupiah = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

        document.getElementById('detailPembelian').innerHTML = jumlahKursiInput + " kursi";
        document.getElementById('totalHarga').innerHTML = "Total Harga : Rp. " + rupiah.format(totalHarga);
      }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
