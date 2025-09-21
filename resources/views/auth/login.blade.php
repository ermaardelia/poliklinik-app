<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>?? | Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css', 'resources/js/app.js') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O... (dipotong)" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-..." crossorigin="anonymous">
    @stack('styles')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center text-lg">
                <b>Poli</b>klinik
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login ke akun anda</p>
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <p style="color:red">{{ $errors->first() }}</p>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                        </div>
                    </div>
                </form>

                <div class="row mt-3 justify-content-center">
                    <div class="col-12 text-center">
                        <span>Belum punya akun? <a href="{{ route('register') }}">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YEQhDI5I9hZ0GFw0ndnNcQ+1T9QYdvthzPPSiqn/+3e7JoE4aGrTUbvFWGUrMQ==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>