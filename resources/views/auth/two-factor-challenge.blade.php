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
        <a href="https://www.facebook.com/RRRclothingshop/" style="font-size:50px;"><b style="color:white;">CVIS</b></a>
        <br><a style="color:#ececec; font-size: 22px;">COVID Inventory Management System</a>
    </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div x-data="{ recovery: false }">
                    <div class="mb-4 text-gray-600" x-show="! recovery">
                        <p class="login-box-msg">
                        Enter your Authentication Code to log in
                        </p>
                    </div>

                    {{-- <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div> --}}

                    <x-jet-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf
                        <div class="input-group mt-4" x-show="! recovery">
                            <input id="code" placeholder="Authentication Code" class="block mt-1 w-full form-control" type="text" inputmode="numeric" name="code"
                                autofocus x-ref="code" autocomplete="one-time-code" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @include('layouts.partials._footerScript')

</body>

</html>


