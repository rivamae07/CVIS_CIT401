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
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div> -->

            <div class="input-group mb-3">
            <input type="email" class="block mt-1 w-full form-control" placeholder="Email" id="email" name="email" :value="old('email', $request->email)" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>

            <!-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div> -->

            <div class="input-group mb-3">
            <input type="password" class="block mt-1 w-full form-control" placeholder="Password" id="password" name="password" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>

            <!-- <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> -->

            <div class="input-group mb-3">
            <input type="password" class="block mt-1 w-full form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Reset</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        @include('layouts.partials._footerScript')

</body>
</html>

