

 @extends('layouts.main')

 @section('title','Add Users')

 @section('content-header')

 @endsection

 @section('content')
    <div class="row">
        <div class="col-lg-12">
          <div class="box box-default box-solid">
           <div class="box-header with-border">
           <h3 class="box-title">Add New User</h3>
            <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
            </div>
            <!-- /.box-tools -->
           </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form" action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group {{$errors->has('username')?'has-error':''}}">
                          <label class="required">Username</label>
                          <input type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="" required>
                          @error('username')
                           <span class="help-block">{{$errors->first('username')}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{$errors->has('first_name')?'has-error':''}}">
                          <label class="required">First Name</label>
                          <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" placeholder="" required>
                           @error('first_name')
                           <span class="help-block">{{$errors->first('first_name')}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label>Middle Name</label>
                          <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}" placeholder="Enter username...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{$errors->has('last_name')?'has-error':''}}">
                          <label class="required">Last Name</label>
                          <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" placeholder="" required>
                           @error('last_name')
                           <span class="help-block">{{$errors->first('last_name')}}</span>
                          @enderror
                        </div>
                    </div>
                </div>
                <!--./row-->
              

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('email')?'has-error':''}}">
                          <label class="required">Email</label>
                          <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="" required>
                          @error('email')
                           <span class="help-block">{{$errors->first('email')}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('gender')?'has-error':''}}">
                          <label class="required">Gender</label>
                          <select name="gender" id="gender" class="form-control select2" style="width: 100%;">
                             <option value="">--Select Gender--</option>
                               <option {{old('gender')=='male' ? 'selected':''}} value="male">Male</option>
                               <option {{old('gender')=='female' ? 'selected':''}} value="female">Female</option>
                            </select>
                          @error('gender')
                           <span class="help-block">{{$errors->first('gender')}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('phone')?'has-error':''}}">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" placeholder="">
                          @error('phone')
                           <span class="help-block">{{$errors->first('phone')}}</span>
                          @enderror
                        </div>
                    </div>
                 </div>
                <!--./row-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('department_id') ? 'has-error':''}}">
                          <label>Department(Only for Staff)</label>
                           <select name="department_id" id="department_id" class="form-control select2" style="width: 100%;">
                             <option value="">--Select Department--</option>
                              @foreach(\App\Models\Department::all() as $department)
                               <option {{old('department_id')==$department->id ? 'selected':''}} value="{{$department->id}}">{{$department->abbreviation}}</option>
                              @endforeach
                            </select>
                            @error('department_id')
                              <span class="help-block">{{$errors->first('department_id')}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('program_id') ? 'has-error':''}}">
                          <label>Enrolled Program(Only for students)</label>
                           <select name="program_id" id="program_id" class="form-control select2" style="width: 100%;">
                             <option value="">--Select Department--</option>
                              @foreach(\App\Models\Program::all() as $program)
                               <option {{old('program_id')==$program->id ? 'selected':''}} value="{{$program->id}}">{{$program->abbreviation}}</option>
                              @endforeach
                            </select>
                            @error('program_id')
                              <span class="help-block">{{$errors->first('program_id')}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('roles') ? 'has-error':''}}">
                           <label class="required">Roles</label>
                           <select name="roles[]" class="form-control select2" multiple="multiple" data-placeholder=" ---Select Roles---"  style="width: 100%;">
                             @foreach(\App\Models\Role::all() as $role)
                               <option value="{{$role->id}}">{{$role->display_name}}</option>
                             @endforeach
                            </select>
                          @error('roles')
                              <span class="help-block">{{$errors->first('roles')}}</span>
                            @enderror
                        </div>
                    </div>
                 </div>
                <!--./row-->
                 <div class="box-footer">
                   <button type="reset" class="btn btn-default">Reset</button>
                   <button type="submit" class="btn btn-primary pull-right">Submit</button>
                 </div>
              <!-- /.box-footer -->
              </form>
          </div>
        <!-- /.box-body -->
      </div>

        </div>
    </div>
 @endsection

 @section('js')
  
 @endsection

