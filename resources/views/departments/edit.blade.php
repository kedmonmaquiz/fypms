
 @extends('layouts.main')
 @section('title','Edit Department')
 @section('content-header')

 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Department</h3>
                    </div>
                    <div class="box-body">
                       <form action="{{ route('departments.update',$department->id) }}" method="post">
                          @csrf
                          @method('PATCH')

                           <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <label class="required">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $department->name}}" placeholder="" required>
                              @error('name')
                                <span class="help-block">{{$errors->first('name')}}</span>
                              @enderror 
                            </div>

                           <div class="form-group {{$errors->has('abbreviation')?'has-error':''}}">
                              <label class="required">Abbreviation</label>
                              <input type="text" name="abbreviation" id="abbreviation" class="form-control" value="{{old('abbreviation') ?? $department->abbreviation}}" placeholder="" required>
                              @error('abbreviation')
                                <span class="help-block">{{$errors->first('abbreviation')}}</span>
                              @enderror 
                           </div>

                           <div class="form-group {{$errors->has('name')?'has-error':''}}">
                          <label>College</label>
                           <select name="college_id" class="form-control select2" style="width: 100%;">
                             <option value="">--Select College--</option>
                              @foreach(\App\Models\College::all() as $college)
                                <option {{$department->college_id == $college->id ? 'selected':''}} value="{{$college->id}}">{{$college->name.'('.$college->abbreviation.')'}}</option>
                              @endforeach
                            </select>
                            @error('college_id')
                              <span class="help-block">{{$errors->first('college_id')}}</span>
                            @enderror 
                        </div>

                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control">{{old('description') ?? $department->description }}</textarea>
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

