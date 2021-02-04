

 @extends('layouts.main')
 @section('title','Edit Role')
 @section('content-header')

 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <form action="{{ route('roles.update',$role->id) }}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PATCH')
                       <div class="form-group {{$errors->has('name')?'has-error':''}}">
                          <label class="required">Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $role->name}}" placeholder="" required>
                            @error('name')
                              <span class="help-block">{{$errors->first('name')}}</span>
                            @enderror 
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" id="description" class="form-control">{{old('description') ?? $role->description}}</textarea>
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

