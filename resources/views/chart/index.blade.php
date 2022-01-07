<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layouts.partials._head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
          ['Employees', {{ $total_users ?? 0 }}],
          ['Products', {{ $total_products ?? 0 }}],
          ['Requests', {{ $total_requests ?? 0 }}],
          ['Stocks In', {{ $total_stocks_in ?? 0 }}],
          ['Returned', {{ $total_return_products ?? 0 }}],
          ['Dispatched', {{ $total_sold_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Comparison of All Information',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Comparison of All Information',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
          ['Employees', {{ $TOD_total_users ?? 0 }}],
          ['Products', {{ $TOD_total_products ?? 0 }}],
          ['Requests', {{ $TOD_total_requests ?? 0 }}],
          ['Stocks In', {{ $TOD_total_stocks_in ?? 0 }}],
          ['Returned', {{ $TOD_total_return_products ?? 0 }}],
          ['Dispatched', {{ $TOD_total_sold_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Comparison of All Information - Daily',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart2_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Comparison of All Information - Daily',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart2_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
          ['Employees', {{ $WK_total_users ?? 0 }}],
          ['Products', {{ $WK_total_products ?? 0 }}],
          ['Requests', {{ $WK_total_requests ?? 0 }}],
          ['Stocks In', {{ $WK_total_stocks_in ?? 0 }}],
          ['Returned', {{ $WK_total_return_products ?? 0 }}],
          ['Dispatched', {{ $WK_total_sold_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Comparison of All Information - Weekly',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart3_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Comparison of All Information - Weekly',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart3_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
            ['Employees', {{ $MO_total_users ?? 0 }}],
            ['Products', {{ $MO_total_products ?? 0 }}],
            ['Requests', {{ $MO_total_requests ?? 0 }}],
            ['Stocks In', {{ $MO_total_stocks_in ?? 0 }}],
            ['Returned', {{ $MO_total_return_products ?? 0 }}],
            ['Dispatched', {{ $MO_total_sold_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Comparison of All Information - Weekly',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart4_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Comparison of All Information - Weekly',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart4_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
            ['Admin', {{ $ADM_users ?? 0 }}],
            ['Mobile Vaccine', {{ $MCV_users ?? 0 }}],
            ['City Hall', {{ $CHV_users ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Employees User Type',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart5_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Employees User Type',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart5_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
            ['Admin', {{ $ADM_stocks_in ?? 0 }}],
            ['Mobile Vaccine', {{ $MCV_stocks_in ?? 0 }}],
            ['City Hall', {{ $CHV_stocks_in ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Product Stocks In - User Type',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart6_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Product Stocks In - User Type',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart6_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
            ['Admin', {{ $ADM_sold_products ?? 0 }}],
            ['Mobile Vaccine', {{ $MCV_sold_products ?? 0 }}],
            ['City Hall', {{ $CHV_sold_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Dispatched Products - User Type',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart7_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Dispatched Products - User Type',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart7_div'));
        barchart.draw(data, barchart_options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Information');
        data.addColumn('number', 'Quantity');
        data.addRows([
            ['Admin', {{ $ADM_return_products ?? 0 }}],
            ['Mobile Vaccine', {{ $MCV_return_products ?? 0 }}],
            ['City Hall', {{ $CHV_return_products ?? 0 }}]
        ]);

        var piechart_options = {title:'Pie Chart: Return Products - User Type',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart8_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Product Stocks In - User Type',
                       width:550,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart8_div'));
        barchart.draw(data, barchart_options);
      }
    </script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      data.addColumn('string', 'Resource');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');

      data.addRows([
        ['2020Spring', 'Observe the Municipality', 'Observation',
         new Date(2020, 2, 22), new Date(2020, 5, 20), null, 100, null],
        ['2020Summer', 'Interview the Residents', 'Gathering Data',
         new Date(2020, 5, 21), new Date(2020, 8, 20), null, 100, null],
        ['2020Autumn', 'Give aid to Citizens', 'AYUDA',
         new Date(2020, 8, 21), new Date(2020, 11, 20), null, 100, null],
        ['2020Winter', '1st Wave of Vaccination', 'COVID-19 Vaccination',
         new Date(2020, 11, 21), new Date(2021, 2, 21), null, 100, null],
        ['2021Spring', 'Observe the Municipality', 'Observation',
         new Date(2021, 2, 22), new Date(2021, 5, 20), null, 50, null],
        ['2021Summer', 'Interview the Residents', 'Gathering Data',
         new Date(2021, 5, 21), new Date(2021, 8, 20), null, 0, null],
        ['2021Autumn', 'Give aid to Citizens', 'AYUDA',
         new Date(2021, 8, 21), new Date(2021, 11, 20), null, 0, null],
        ['2021Winter', '2nd Wave of Vaccination', 'COVID-19 Vaccination',
         new Date(2021, 11, 21), new Date(2022, 2, 21), null, 0, null],
        ['Football', 'Report COVID-19 Status', 'COVID-19 Status/Test',
         new Date(2020, 8, 4), new Date(2021, 1, 1), null, 100, null],
        ['Baseball', '3rd Wave of COVID-19 Tests ', 'COVID-19 Status/Test',
         new Date(2021, 2, 31), new Date(2021, 9, 20), null, 14, null],
        ['Basketball', '2nd Wave of COVID-19 Tests', 'COVID-19 Status/Test',
         new Date(2020, 9, 28), new Date(2021, 5, 20), null, 86, null],
        ['Hockey', '1st Wave of COVID-19 Tests', 'COVID-19 Status/Test',
         new Date(2020, 9, 8), new Date(2021, 5, 21), null, 89, null]
      ]);

      var options = {
        height: 400,
        gantt: {
          trackHeight: 30
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
      
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" style="padding:3.5rem 0;">

    @include('layouts.partials._navbar')
    @include('layouts.partials._sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app" style="padding-top:9px;">

    @include('flash::message')
    @yield('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Charts and Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Charts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
      <div class="row">

<div class="col">

  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Inventory Reports</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
<div class="col">
  <div class="card card-success collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Summary Report</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3 class="text-white">{{ $total_users ?? 0 }}</h3>

            <p class="text-white">Employees</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{ route('users.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3 class="text-white">{{ $total_products ?? 0 }}</h3>

            <p class="text-white">Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="{{ route('products.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3 class="text-white">{{ $total_requests ?? 0 }}</h3>

            <p class="text-white">Requests</p>
          </div>
          <div class="icon">
            <i class="fa fa-truck-loading"></i>
          </div>
          <a href="{{ route('requestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3 class="text-white">{{ $total_stocks_in ?? 0 }}</h3>

            <p class="text-white">Stocks In</p>
          </div>
          <div class="icon">
            <i class="fa fa-cart-plus"></i>
          </div>
          <a href="{{ route('stockHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 class="text-white">{{ $total_return_products ?? 0 }}</h3>

            <p class="text-white">Return Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-undo-alt"></i>
          </div>
          <a href="{{ route('returnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 class="text-white">{{ $total_sold_products ?? 0 }}</h3>

            <p class="text-white">Dispatched </p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-bag"></i>
          </div>
          <a href="{{ route('soldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <table class="columns">
    <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

<!-- Today -->

<div class="row">
<div class="col">
  <div class="card card-primary collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Daily Report</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_users ?? 0 }}</h3>

            <p class="text-white">Employees</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{ route('users.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_products ?? 0 }}</h3>

            <p class="text-white">Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="{{ route('products.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_requests ?? 0 }}</h3>

            <p class="text-white">Requests</p>
          </div>
          <div class="icon">
            <i class="fa fa-truck-loading"></i>
          </div>
          <a href="{{ route('requestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_stocks_in ?? 0 }}</h3>

            <p class="text-white">Stocks In</p>
          </div>
          <div class="icon">
            <i class="fa fa-cart-plus"></i>
          </div>
          <a href="{{ route('stockHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_return_products ?? 0 }}</h3>

            <p class="text-white">Return Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-undo-alt"></i>
          </div>
          <a href="{{ route('returnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 class="text-white">{{ $TOD_total_sold_products ?? 0 }}</h3>

            <p class="text-white">Dispatched </p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-bag"></i>
          </div>
          <a href="{{ route('soldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <table class="columns">
    <tr>
        <td><div id="piechart2_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart2_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

<!-- Weekly -->

<div class="row">
<div class="col">
  <div class="card card-info collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Weekly Report</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_users ?? 0 }}</h3>

            <p class="text-white">Employees</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{ route('users.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_products ?? 0 }}</h3>

            <p class="text-white">Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="{{ route('products.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_requests ?? 0 }}</h3>

            <p class="text-white">Requests</p>
          </div>
          <div class="icon">
            <i class="fa fa-truck-loading"></i>
          </div>
          <a href="{{ route('requestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_stocks_in ?? 0 }}</h3>

            <p class="text-white">Stocks In</p>
          </div>
          <div class="icon">
            <i class="fa fa-cart-plus"></i>
          </div>
          <a href="{{ route('stockHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_return_products ?? 0 }}</h3>

            <p class="text-white">Return Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-undo-alt"></i>
          </div>
          <a href="{{ route('returnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 class="text-white">{{ $WK_total_sold_products ?? 0 }}</h3>

            <p class="text-white">Dispatched </p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-bag"></i>
          </div>
          <a href="{{ route('soldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <table class="columns">
    <tr>
        <td><div id="piechart3_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart3_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

<!-- Monthly -->

<div class="row">
<div class="col">
  <div class="card card-secondary collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Monthly Report</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_users ?? 0 }}</h3>

            <p class="text-white">Employees</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{ route('users.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_products ?? 0 }}</h3>

            <p class="text-white">Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="{{ route('products.index') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_requests ?? 0 }}</h3>

            <p class="text-white">Requests</p>
          </div>
          <div class="icon">
            <i class="fa fa-truck-loading"></i>
          </div>
          <a href="{{ route('requestHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_stocks_in ?? 0 }}</h3>

            <p class="text-white">Stocks In</p>
          </div>
          <div class="icon">
            <i class="fa fa-cart-plus"></i>
          </div>
          <a href="{{ route('stockHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_return_products ?? 0 }}</h3>

            <p class="text-white">Return Products</p>
          </div>
          <div class="icon">
            <i class="fa fa-undo-alt"></i>
          </div>
          <a href="{{ route('returnProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 class="text-white">{{ $MO_total_sold_products ?? 0 }}</h3>

            <p class="text-white">Dispatched </p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-bag"></i>
          </div>
          <a href="{{ route('soldProductHistory') }}" class="text-white small-box-footer">More info &nbsp<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <table class="columns">
    <tr>
        <td><div id="piechart4_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart4_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</div>

<div class="row">
        <div class="col">
            <!-- Default box -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Gantt Chart for Administrators</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button> -->
                </div>
              </div>

                <div class="card-body" style="margin-top:0;">
                    <div id="chart_div"></div>
                </div>

            </div>

            <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Comparison of Information</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
<div class="col">
  <div class="card card-success collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Employees</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        
      <table class="columns">
    <tr>
        <td><div id="piechart5_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart5_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>


<div class="row">
<div class="col">
  <div class="card card-primary collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Stock In</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        
      <table class="columns">
    <tr>
        <td><div id="piechart6_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart6_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

<div class="row">
<div class="col">
  <div class="card card-info collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Dispatched Products</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        
      <table class="columns">
    <tr>
        <td><div id="piechart7_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart7_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

<div class="row">
<div class="col">
  <div class="card card-secondary collapsed-card">
    <div class="card-header">
      <h3 class="card-title">Return Products</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      <div class="col">
        
      <table class="columns">
    <tr>
        <td><div id="piechart8_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="barchart8_div" style="border: 1px solid #ccc; text-align: center"></div></td>
        <td><div id="" style="border: 1px solid #ccc">
        </div></td>
    </tr>
    </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
</div>
</div>
</div>


    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</div>

</div>



</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

  <!-- /.content-wrapper -->

  
        <!-- /.row -->

        
  

  </div>
    </div>
  <!-- /.content-wrapper -->

  @include('layouts.partials._footer')

</div>
<!-- ./wrapper -->

@include('layouts.partials._footerScript')

</body>
</html>
