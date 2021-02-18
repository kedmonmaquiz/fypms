<form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="form-group {{$errors->has('title')?'has-error':''}}">
          <label class="required">Title</label>
          <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="" required>
            @error('title')
              <span class="help-block">{{$errors->first('title')}}</span>
            @enderror 
          </div>

          <div class="form-group">
            <label class="required">Description</label>
            <textarea name="description" id="description" class="form-control" required="">{{old('description')}}</textarea>
             @error('description')
              <span class="help-block">{{$errors->first('description')}}</span>
            @enderror 
          </div>

      <div class="box-footer">
       <button type="submit" class="btn btn-primary pull-right">Submit</button>
      </div>
    </form>