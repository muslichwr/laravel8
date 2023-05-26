<!DOCTYPE html>
<html lang="en">
<head>
        @include('adminlte/header')
        @livewireStyles
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
        @include('adminlte/preloader')

  <!-- Navbar -->
        @include('adminlte/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
        @include ('adminlte/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @include ('adminlte/main-header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
            @yield('content')
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
        @include ('adminlte/footer')
</div>
<!-- ./wrapper -->

@include ('adminlte/javascript')
@livewireScripts
</body>
</html>