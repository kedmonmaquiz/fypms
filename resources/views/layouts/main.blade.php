<!DOCTYPE html>
<html>
<head>
  @include('layouts._head')
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
   @include('layouts._header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        @include('layouts._sidebar')
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content-header')
    </section>

    <!-- Main content -->
    <section class="content" style="padding-top: 0;">

    <div class="box box-default box-solid collapsed-box">
      <div class="box-header">
        <span class="pull-left">{{date('D, d M Y')}}</span>
        <span class="pull-right">Academic year: {{\App\Models\AcademicYear::where('status',1)->first()->name}}</span>
      </div>
    </div>

       @if(\Session::has('message'))
           <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong><i class="icon fa fa-check"></i> Alert! </strong> {{Session('message')}}. 
          </div>

       @endif

       @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    @include('layouts._footer')
  </footer>

</div>
<!-- ./wrapper -->

@include('layouts._javascripts')
</body>
</html>