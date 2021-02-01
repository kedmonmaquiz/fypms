 <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>YP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> FYPMS </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <!--Academic Year-->
      <div class="pull-right" style="padding-right: 14px;padding-top: 8px;">
          <div class="btn-group" style="">
            <button type="button" class="btn btn-default">{{\App\Models\AcademicYear::where('status',1)->first()->name}}</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu" style="">
              @foreach(\App\Models\AcademicYear::all() as $row)
               <li><a style="color: #777;" href="">{{$row->name}} <i class="{{$row->name==\App\Models\AcademicYear::where('status',1)->first()->name ? 'fa fa-check':''}}"></i></a></li>
              @endforeach
            </ul>
        </div>

         <!--User Profile-->
         <div class="btn-group" style="">
           <button type="button" class="btn btn-default">{{\Auth::user()->fullName ?? 'Username'}}</button>
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
            <li><a style="color: #777;" href="{{ route('user.profile') }}">View Profile</a></li>
            {{-- <li class="divider" style="color: #777;"></li> --}}
            <li><a style="color: #777;" href="{{ route('user.profile') }}">Edit Profile</a></li>
            {{-- <li class="divider" style="color: #777;"></li> --}}
            <li>
              <a href="#" style="color: #777;" onclick="getElementById('logoutForm').submit()">Logout</a>
                 <form id="logoutForm" action="{{route('logout')}}" method="post">
                    @csrf
                 </form>
            </li>
          </ul>
        </div>
     </div>
    </nav>

   