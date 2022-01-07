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
        <p class="login-box-msg">Kindly verify your account to continue</p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                        <p class="login-box-msg">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </p>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" style="text-align:center;  text-decoration: underline;">
                        @csrf
                        <br>
                        <a type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                            or logout of the account
                        </a>
                    </form>

                </div>
            </div>

            @include('layouts.partials._footerScript')

</body>

</html>


