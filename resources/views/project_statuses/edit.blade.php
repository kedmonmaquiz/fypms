

 @extends('layouts.main')
 @section('title','Edit Category')
 @section('content-header')
 
 @endsection

 @section('content')
    <div class="college">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <form action="{{ route('project_statuses.update',$projectStatus->id) }}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PATCH')
                       <div class="form-group {{$errors->has('name')?'has-error':''}}">
                          <label class="required">Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{old('name') ?? $projectStatus->name}}" placeholder="" required>
                            @error('name')
                              <span class="help-block">{{$errors->first('name')}}</span>
                            @enderror 
                        </div>

                        <div class="form-group {{$errors->has('display_name')?'has-error':''}}">
                          <label class="required">Display Name</label>
                          <input type="text" name="display_name" id="display_name" class="form-control" value="{{old('display_name') ?? $projectStatus->name}}" placeholder="" required>
                            @error('display_name')
                              <span class="help-block">{{$errors->first('display_name')}}</span>
                            @enderror 
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" id="description" class="form-control">{{old('description') ?? $projectStatus->description}}</textarea>
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

