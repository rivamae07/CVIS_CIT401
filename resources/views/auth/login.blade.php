<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
</head>

<body class="hold-transition login-page login-bg">
<div class="login-box">
  <div class="login-logo">
    <a href="https://www.facebook.com/RRRclothingshop/" style="font-size:50px;"><b style="color:white;">CVIS</b></a>
    <br><a style="color:#ececec; font-size: 22px;">COVID Inventory Management System</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <x-jet-validation-errors class="mb-3" />

      @if (session('status'))
      <div class="mb-4 font-medium text-sm" style="text-align:center;">
              {{ session('status') }}
          </div>
      @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> -->

            <div class="input-group mb-3">
                <!-- <label for="email" value="{{ __('Email') }}"> </label> -->
                <input type="email" class="block mt-1 w-full form-control" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <!-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div> -->

            <div class="input-group mb-3">
                <!-- <label for="password" value="{{ __('Password') }}"> </label> -->
                <input type="password" class="block mt-1 w-full form-control" placeholder="Password" id="password" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
         @endif
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@include('layouts.partials._footerScript')

</body>
</html>

            <!-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div> -->
