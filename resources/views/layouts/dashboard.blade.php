@include('dashboard.partition._head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 @include('dashboard.partition._nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('dashboard.partition._aside')
  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 {{--  @include('dashboard.partition._footer')  --}}
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
@include('dashboard.partition._script')
