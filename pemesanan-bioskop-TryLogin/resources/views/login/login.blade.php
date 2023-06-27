<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{asset('https://kit.fontawesome.com/d508860b60.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style/login/style.css')}}" />
    <link rel="icon" href="img/icon/icon 1.png" />
    <title>Cikling | Sign-in and Sign-up</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('login')}}" class="sign-in-form" method="post">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="/add-pelanggan-post" class="sign-up-form" method="post">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" placeholder="Phone Number" name="notelp"/>
            </div>
            <div class="gender-field">
              <input
                type="radio"
                name="gender"
                value="male"
                id="male"
                checked />
              <label for="male">Male</label>
              <input type="radio" name="gender" value="female" id="female" />
              <label for="female">Female</label>
            </div>
            
            <button type="submit" class="btn">Sign Up</button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang</h3>
            <p>
              Semoga pemesanan tiket film bioskop yang ada di website kami bisa
              memmbuat hari anda menjadi bahagia
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="img/preview.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Kenapa harus signup?</h3>
            <p>
              Jika anda tidak melakukan sign up maka tidak bisa mengakses
              website kami,tetapi ada opsi yang kami berikan untuk login lewat
              platform lain
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="img/roles.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('js/login/app.js')}}"></script>
  </body>
</html>
