
 @extends('layouts.main')
 @section('title','Edit Program')
 @section('content-header')

 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <form action="{{ route('programs.update',$program->id) }}" method="post">
                          @csrf
                          @method('PATCH')

                           <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <label class="required">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $program->name}}" placeholder="" required>
                              @error('name')
                                <span class="help-block">{{$errors->first('name')}}</span>
                              @enderror 
                            </div>

                           <div class="form-group {{$errors->has('abbreviation')?'has-error':''}}">
                              <label class="required">Abbreviation</label>
                              <input type="text" name="abbreviation" id="abbreviation" class="form-control" value="{{old('abbreviation') ?? $program->abbreviation}}" placeholder="" required>
                              @error('abbreviation')
                                <span class="help-block">{{$errors->first('abbreviation')}}</span>
                              @enderror 
                           </div>

                          <div class="form-group {{$errors->has('department_id') ? 'has-error':''}}">
                          <label>Department</label>
                           <select name="department_id" class="form-control select2" style="width: 100%;">
                             <option value="">--Select Department--</option>
                              @foreach(\App\Models\Department::all() as $department)
                                <option {{$program->department_id == $department->id ? 'selected':''}} value="{{$department->id}}">{{$department->name.' ('.$department->abbreviation.')'}}</option>
                              @endforeach
                            </select>
                            @error('program_id')
                              <span class="help-block">{{$errors->first('program_id')}}</span>
                            @enderror 
                        </div>

                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control">{{old('description') ?? $program->description }}</textarea>
                         </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary pull-right">Update Data</button>
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

