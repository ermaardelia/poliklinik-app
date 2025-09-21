<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>?? | Admin Dashboard</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css', 'resources/js/app.js') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O... (dipotong)" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-..." crossorigin="anonymous">
  @stack('styles')
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center text-lg">
        <h1><b>Register</b></h1>
      </div>

      <div class="card-body">
        <p class="login-box-msg">Register akun baru</p>
        <form action="{{ route('register') }}" method="POST">
          @csrf

          <div class="input-group mb-3">
            <input type="text" class="form-control" required placeholder="Nama Lengkap" name="nama">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" required placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" required placeholder="Alamat" name="alamat">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-marker"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="number" class="form-control" required placeholder="No HP" name="no_hp">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone-square"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="number" class="form-control" required placeholder="No KTP" name="no_ktp">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-address-book"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" required placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" required placeholder="Confirm Password" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>

        <div class="row justify-content-center mt-3">
          <div class="col-12 text-center">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
          integrity="sha512-..." crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>