
 @extends('layouts.main')
 @section('title','Edit Panel')
 @section('content-header')
  
 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Panel</h3>
                    </div>
                    <div class="box-body">
                       <form action="{{ route('panels.update',$panel->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PATCH')

                           <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <label class="required">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $panel->name }}" placeholder="" required>
                              @error('name')
                                <span class="help-block">{{$errors->first('name')}}</span>
                              @enderror 
                            </div>

                             <div class="form-group {{$errors->has('department_id') ? 'has-error':''}}">
                              <label>Department</label>
                               <select name="department_id" class="form-control select2" style="width: 100%;">
                                 <option value="">--Select Department--</option>
                                  @foreach(\App\Models\Department::all() as $department)
                                    <option {{$panel->department_id == $department->id ? 'selected':''}} value="{{$department->id}}">{{$department->name.' ('.$department->abbreviation.')'}}</option>
                                  @endforeach
                                </select>
                                @error('department_id')
                                  <span class="help-block">{{$errors->first('department_id')}}</span>
                                @enderror 
                            </div>

                           <div class="form-group {{$errors->has('date')?'has-error':''}}">
                             <label class="">Date</label>
                             <div class="input-group date">
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <input type="text" name="date" class="form-control pull-right" value="{{old('date') ?? $panel->date}}" id="datepicker" name="date" placeholder="Choose Date">
                              </div>
                              @error('date')
                                <span class="help-block">{{$errors->first('date')}}</span>
                              @enderror 
                           </div>

                           <div class="form-group {{$errors->has('start_time')?'has-error':''}}">
                             <label class="">Start Time</label>
                             <div class="input-group">
                               <div class="input-group-addon">
                                  <i class="fa fa-clock-o"></i>
                                </div>
                                  <input type="text" name="start_time" id="start_time" value="{{old('start_time') ?? $panel->start_time}}" class="form-control timepicker" value="{{old('start_time')}}" placeholder="">
                                </div>
                            
                              @error('start_time')
                                <span class="help-block">{{$errors->first('start_time')}}</span>
                              @enderror 
                           </div>

                           <div class="form-group {{$errors->has('end_time')?'has-error':''}}">
                             <label class="">End Time</label>
                             <div class="input-group">
                               <div class="input-group-addon">
                                  <i class="fa fa-clock-o"></i>
                                </div>
                                  <input type="text" name="end_time" id="end_time" class="form-control timepicker" value="{{old('end_time') ?? $panel->end_time}}" placeholder="Enter start time..">
                                </div>
                              @error('end_time')
                                <span class="help-block">{{$errors->first('end_time')}}</span>
                              @enderror 
                           </div>

                         <div class="form-group {{$errors->has('venue')?'has-error':''}}">
                            <label class="">Venue</label>
                            <input type="text" name="venue" id="venue" class="form-control" value="{{old('venue') ?? $panel->venue}}" placeholder="Enter start end..">
                              @error('venue')
                                <span class="help-block">{{$errors->first('venue')}}</span>
                              @enderror 
                            </div>

                        <div class="box-footer">
                         <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                      </form>
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

