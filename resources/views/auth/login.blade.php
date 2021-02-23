
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FYP Portal | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
  <!-- Skins.-->
  <link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
  <style>
     .main-footer {
        background: #ecf0f5;
     }

    .login-box-body, .register-box-body {
        background: #ecf0f5;
    }

    dd{
      padding-bottom: 10px;
    }

  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="{{url('/')}}" class="navbar-brand">FYPMS</a>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-sm-8" style="padding-top: 40px;">
              <div>
                  <h2>Welcome to FYP Management System</h2>
                   <p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Natus tempore, quis architecto ipsam, perferendis impedit alias minima esse, ea nobis at ex laborum eius. Est velit hic rem adipisci aliquid!</p>
              </div>
               <div>
                  <h2>What does FYPMS do?</h2>
                  <p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Natus tempore, quis architecto ipsam, perferendis impedit alias minima esse, ea nobis at ex laborum eius. Est velit hic rem adipisci aliquid!</p>
                  <dl>
                      <dt>Admin</dt>
                      <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate, ex ullam cum perferendis eligendi iure quo, quasi cumque tempore libero rerum ipsam corporis sapiente porro nobis! Aut, sit ipsam?</dd>
                       <dt>Coordinator</dt>
                      <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate, ex ullam cum perferendis eligendi iure quo, quasi cumque tempore libero rerum ipsam corporis sapiente porro nobis! Aut, sit ipsam?</dd>
                       <dt>Supervisor</dt>
                      <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate, ex ullam cum perferendis eligendi iure quo, quasi cumque tempore libero rerum ipsam corporis sapiente porro nobis! Aut, sit ipsam?</dd>
                       <dt>Student</dt>
                      <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate, ex ullam cum perferendis eligendi iure quo, quasi cumque tempore libero rerum ipsam corporis sapiente porro nobis! Aut, sit ipsam?</dd>
                  </dl>
              </div>

            </div>
            <div class="col-sm-4 pull-right" style="padding-top: 40px;">
                <div class="login-box-body">
                <h2 class="login-box-msg">Login</h2>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                  <div class="form-group has-feedback {{$errors->has('username') ? 'has-error':''}}">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback "></span>
                    @error('username')
                      <span class="help-block">{{$errors->first('username')}}</span>
                    @enderror
                  </div>

                  <div class="form-group has-feedback {{$errors->has('password') ? 'has-error':''}}">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                      <span class="help-block">{{$errors->first('password')}}</span>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-sm-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
              </div>
             <!-- /.login-box-body -->
            </div>
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>University of Dar es Salaam</b>
      </div>
      <strong>Copyright &copy; {{date('Y')}} <a href="{{ url('/') }}">FYPMS</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
