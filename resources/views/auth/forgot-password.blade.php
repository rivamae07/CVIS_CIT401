<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="https://www.facebook.com/RRRclothingshop/" style="font-size:45px;"><b style="color:white;">COVID Vaccine</b> <span style="color:#ececec;">Inventory System</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Just let us know your Email!</p>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600" style="text-align:center;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

        <div class="input-group mb-3">
          <input type="email" class="block mt-1 w-full form-control" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Email Password Reset Link') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @include('layouts.partials._footerScript')

</body>
</html>
