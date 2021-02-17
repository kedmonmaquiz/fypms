
 @extends('layouts.main')

 @section('title','Edit Users')

 @section('content-header')

 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            {{-- <div class="box-header with-border">
              <h3 class="box-title">Create User</h3>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
               <form action="{{ route('announcements.update',$announcement->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PATCH')
                 <div class="form-group {{$errors->has('title')?'has-error':''}}">
                  <label class="required">Title</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{$announcement->title ?? old('title')}}" placeholder="" required>
                    @error('title')
                      <span class="help-block">{{$errors->first('title')}}</span>
                    @enderror 
                  </div>

                  <div class="form-group {{$errors->has('body')?'has-error':''}}">
                   <label class="required">Body</label>
                   <textarea name="body" id="editor1" class="form-control">{{$announcement->body ?? old('body')}}</textarea>
                    @error('body')
                      <span class="help-block">{{$errors->first('body')}}</span>
                    @enderror 
                  </div>

                  <div class="form-group {{$errors->has('file')?'has-error':''}}">
                  <label class="">Upload File (Optional)</label>
                  <input type="file" name="file" id="exampleInputFile">
                    @error('file')
                      <span class="help-block">{{$errors->first('file')}}</span>
                    @enderror 
                 </div>

                <div class="box-footer">
                 <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
 @endsection

 @section('js')
  
 @endsection
