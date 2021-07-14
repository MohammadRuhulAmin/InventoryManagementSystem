<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('layouts.partials.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 

  <!-- Main Sidebar Container -->
  @include('layouts.partials.navbar')
 @include('layouts.partials.sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('flash::message')
    @yield('content')
   
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  

  <!-- Main Footer -->
@include('layouts.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


@include('layouts.partials.footer-script')
</body>
</html>
