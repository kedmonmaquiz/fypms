

 @extends('layouts.main')
 @section('title','Edit Program')
 @section('content-header')

 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <form action="{{ route('academic_years.update',$academicYear->id) }}" method="post" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')
                         <div class="form-group {{$errors->has('name')?'has-error':''}}">
                          <label class="required">Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $academicYear->name}}" placeholder="" required>
                            @error('name')
                              <span class="help-block">{{$errors->first('name')}}</span>
                            @enderror 
                          </div>
                          
                          <div class="form-group {{$errors->has('status')?'has-error':''}}">
                          <label class="required">Status</label>
                          <select name="status" id="status" class="form-control" required>
                             <option value="">--Select Status--</option>
                             <option value="1" {{$academicYear->status == 1 ? 'selected':''}}>Active</option>
                             <option value="0" {{$academicYear->status == 0 ? 'selected':''}}>Not Active</option>
                          </select>
                            @error('status')
                              <span class="help-block">{{$errors->first('status')}}</span>
                            @enderror 
                          </div>


                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control">{{old('description') ?? $academicYear->description}}</textarea>
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
 
 @endsection

