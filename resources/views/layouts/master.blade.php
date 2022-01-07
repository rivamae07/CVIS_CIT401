<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" style="padding:3.5rem 0;">

    @include('layouts.partials._navbar')
    @include('layouts.partials._sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app" style="padding-top:9px;">

    @include('flash::message')
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('layouts.partials._footer')

</div>
<!-- ./wrapper -->

@include('layouts.partials._footerScript')

</body>
</html>
