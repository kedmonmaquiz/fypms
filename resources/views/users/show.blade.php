

 @extends('layouts.main')
 @section('title','View User')
 @section('content-header')
  
 @endsection

 @section('content')
    <div class="row">
       <div class="col-md-8">
          <div class="box box-primary">
             <div class="box-header">
                <h3 class="box-title">{{$user->username}}</h3>
              </div>
              <div class="box-body">
                 <table class="table table-primary table-bordered">
                    <tr>
                      <th>Attribute</th>
                      <th>Value</th>
                    </tr>
                    <tr>
                      <td>User Name</td>
                      <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                      <td>First Name</td>
                      <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                      <td>Middle Name</td>
                      <td>@if($user->middle_name) {{$user->middle_name}} @else <i class="text-danger">Not Set</i> @endif</td>
                    </tr>
                    <tr>
                      <td>Last Name</td>
                      <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                      <td>Academic Year</td>
                      <td>@if($user->academicYear) {{$user->academicYear->name}}</i> @else <i class="text-danger">Not Set</i> @endif</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                      <td>Program</td>
                      <td>@if($user->program) {{$user->program->name.' ('.$user->program->abbreviation.')'}} @else <i class="text-danger">Not Set</i> @endif</td>
                    </tr>
                    <tr>
                      <td>Department</td>
                      <td>@if($user->department) {{$user->department->name.' ('.$user->department->abbreviation.')'}} @else <i class="text-danger">Not Set</i> @endif</td>
                    </tr>
                    <tr>
                      <td>Roles</td>
                      <td>@if($user->roles) @foreach($user->roles as $role) <i class="badge badge-primary">{{$role->display_name}}</i> @endforeach @endif</td>
                    </tr>
                 </table>
                    </div>
                    
                </div>
                <!-- /.box -->
            </div>
        </div>
 @endsection

 @section('js')
  <script>
   
  </script>
 <script>
   
    $(function(){
      
    });
 </script>
 
 @endsection

