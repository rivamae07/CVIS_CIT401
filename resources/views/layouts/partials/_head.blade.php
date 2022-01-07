<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> COVID Vaccine Inventory System </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

  <link rel="shortcut icon" href="{{asset('storage/images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('storage/images/favicon.png')}}" type="image/x-icon">

  <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('https://cdn.dribbble.com/users/60166/screenshots/9658993/media/1ff9a0bfb400a51230372141c24b5b0a.jpeg?compress=1&resize=1000x750') }}"/>
  <link rel="icon" href="{{ URL::to('https://cdn.dribbble.com/users/60166/screenshots/9658993/media/1ff9a0bfb400a51230372141c24b5b0a.jpeg?compress=1&resize=1000x750') }}" type="image/x-icon"> -->

  <style>
    /* Backgrounds */

    #products-bg{
      background-image: url('https://images.pexels.com/photos/6347545/pexels-photo-6347545.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); 
    }

    #admin-bg{
      background-image: url('https://images.pexels.com/photos/6347601/pexels-photo-6347601.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); 
    }

    #dashboard-bg{
      background-image: url('https://images.pexels.com/photos/3489129/pexels-photo-3489129.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); 
    }

    #categories-bg{
      background-image: url('https://images.pexels.com/photos/1937336/pexels-photo-1937336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    #brands-bg{
      background-image: url('https://images.pexels.com/photos/1390062/pexels-photo-1390062.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
      background-position: center;
    }

    

    #stocks-bg{
      background-image: url('https://images.pexels.com/photos/3119215/pexels-photo-3119215.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    #sold-bg{
      background-image: url('https://images.pexels.com/photos/1884583/pexels-photo-1884583.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    #return-bg{
      background-image: url('https://images.pexels.com/photos/3984887/pexels-photo-3984887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    .subpage-bg{
      background-repeat: no-repeat; 
      background-size: cover; 
      width: 100%;
    }

    .callout.callout-primary {
      border-left-color: #007BFF;
    }

    .login-page, .register-page{
      -ms-flex-align: center;
      align-items: center;
      background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), 
      url('https://quincy-network.s3.ca-central-1.amazonaws.com/wp-content/uploads/sites/10/2020/09/coronavirus-dark-blue.jpg'); 
      background-repeat: no-repeat; 
      background-size: cover; 
      width: 100%;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      height: 100vh;
      -ms-flex-pack: center;
      justify-content: center;
      backdrop-filter: blur(3px);
    }

    /* .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
      position: relative;
      width: 100%;
      padding-right: 15px ! important;
      padding-left: 15px;
    } 

     */

    .mt-1, .my-1 {
      margin-top: 0rem!important;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
      background-color: rgba(255, 255, 255, .9);
      color: #343a40;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #444;
      height: 30px;
      line-height: 30px ! important;
    }

    .form-control {
      display: block;
      width: 100%;
      height: calc(2.25rem + 7px) ! important;
      padding: .375rem 1rem .375rem .75rem ! important;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      box-shadow: inset 0 0 0 transparent;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .select2-container .select2-selection--single {
      box-sizing: border-box;
      cursor: pointer;
      display: block;
      height: 40px ! important;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-user-select: none;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 26px;
      position: absolute;
      top: 6px ! important;
      right: 1px;
      width: 20px;
    }
</style>

  @stack('css')
