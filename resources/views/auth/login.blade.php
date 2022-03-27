<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in | {{ config('app.name') }}</title>

  <style>
      body {
        background: url(/images/banner_4.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('admin.login') }}" class="text-white font-weight-bold" >
        <b style="color: rgba(0, 162, 255, 0.9)" >Sunshine Pangandaran</b> Hotel
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card" >

    <div class="card-body login-card-body rounded-lg shadow-lg " style="background-color: rgba(0, 162, 255, 0.9)"  >
          <h3 class="login-box-msg text-white ">SILAHKAN LOGIN</h3>

      <form action="?" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="text-white fas fa-user"></span>
            </div>
          </div>
          @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control{{ $errors->has('username') ? ' is-invalid':'' }}" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="text-white fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" class="text-dark">
                Ingatkan Saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt"></i>  Log In
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
