<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cikling | {{$title}}</title>
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

    <div class="container" style="height: auto">
      <a href="/" class="button mt-5"><span>Back</span></a>
      <hr class="hr" />
      <div class="row mt-5">
        <div class="col-4 text-center">
          <img
            src="https://image.tmdb.org/t/p/w500/{{$poster_path}}"
            width="280"
            height="420"
            alt=""
            class="object-fit-cover" style="box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);
            -webkit-box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);
            -moz-box-shadow: 0px 0px 17px 0px rgba(0,0,0,0.6);"/>

          <div class="mt-3"><span class="fw-bolder">Rating: {{$rating}}</span></div>
          <div class="mt-3">
            <a href="https://www.youtube.com/embed/{{ $trailer }}" target="_blank" class="btn btn-success w-75">Watch Trailer</a>
          </div>
          <div class="mt-3">
            @guest
                <a href="/login" class="btn btn-danger w-75">Buy Ticket</a>
            @else
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-danger w-75">Buy Ticket</button>
                <!-- Modal -->
                <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="/detail/film/buy" method="get">
                        @csrf
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Tempat Duduk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="h4 mb-2">{{$title}}</div>
                        <div class="container">
                          <div class="row justify-content-around mt-5">                          
                              @if(empty($getJadwal))
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Tanggal tidak tersedia</label>
                                </div>
                              @else
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Pilih Tanggal Yang Tersedia</label>
                                  <select class="form-select" name="tanggal" aria-label="Default select example">
                                    @foreach ($getJadwal as $item)
                                      <option>{{$item->tanggal_tayang}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              @endif
                              <input type="text" value="{{$id}}" name="id" hidden>           
                          </div>
                        </div>
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Next</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>  
            @endguest
          </div>
        </div>
        <div class="col-8">
           <div class="container">
            <!-- Title -->
            <h2>{{$title}}</h2>

            <!-- Synopsis -->
            <p class="h5 mt-4" style="font-size: 18px">Synopsis</p>
            <p style="font-size: 15px; text-align: justify">
              {{$overview}}
            </p>

            <!-- Genre -->
            <p class="h5 mt-4" style="font-size: 18px">Genre</p>
            <p style="font-size: 15px; text-align: justify"> 
                @foreach ($genres as $index => $item)
                    {{ $item['name'] }}
                    @if ($index < count($genres) - 1)
                        ,
                    @endif
                @endforeach
            </p>
            

            <!-- Director -->
            <p class="h5 mt-4" style="font-size: 18px">Director</p>
            <p style="font-size: 15px; text-align: justify">
                @foreach ($producers as $index => $item)
                    {{ $item }}
                    @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </p>
            

           <!-- Languange -->
           <p class="h5 mt-4" style="font-size: 18px">Languange</p>
           <p style="font-size: 15px; text-align: justify">
            @foreach ($languanges as $index => $item)
                {{ $item['english_name'] }}
                @if (!$loop->last)
                    ,
                @endif
            @endforeach
           </p>

           {{-- Release Data --}}
           <p class="h5 mt-4" style="font-size: 18px">Release Date</p>
           <p style="font-size: 15px; text-align: justify">
            {{$release_date}}
           </p>

            <!-- Duration -->
            <p class="h5 mt-4" style="font-size: 18px">Duration</p>
            <p style="font-size: 15px; text-align: justify">{{$duration}} Minutes</p>
          </div>
        </div>
      </div>

      <!-- Actor -->
      <p class="h5 mt-5 mb-4 text-center" style="font-size: 20px">
        Actor and Actress
      </p>
      <div id="style-2" style="overflow-x: auto" class="actor-section">
        <div class="row mt-3">
          <div class="col-12">
            <div class="text-center">
              <div class="actors-container">

                @foreach ($actors as $index => $item)  
                <div class="actor-container">
                  <img
                  @if (!empty($item['profile_path'] ))
                    src="https://image.tmdb.org/t/p/w500/{{ $item['profile_path'] }}"
                  @else
                    src="{{asset('img/control/unknown.png')}}"
                  @endif
                    
                    alt="{{ $item['name'] }}"
                    class="actor-image" />
                  <p style="font-weight: bolder" class="actor-name">{{ $item['name'] }}</p>
                  
                </div>
                <!-- Add more actors here -->
                @endforeach
              
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="scroll-container">
        <div class="scroll-content">
          @foreach ($actors as $index => $item)   
          <div class="card shadow">
            <img src="https://image.tmdb.org/t/p/w500/{{ $item['profile_path'] }}" class="card-img-top" alt="{{ $item['name'] }}" />
            <div class="card-body">
              <h5 class="card-title text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                {{ $item['name'] }}
              </h5>
            </div>
          </div>   
          @endforeach
        </div>
      </div> --}}
    </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
  </body>
</html>
