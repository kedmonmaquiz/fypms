    <form action="{{ route('departments.store') }}" method="post" enctype="multipart/form-data">
       @csrf

       <div class="form-group {{$errors->has('name')?'has-error':''}}">
        <label class="required">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="" required>
          @error('name')
            <span class="help-block">{{$errors->first('name')}}</span>
          @enderror 
        </div>

        <div class="form-group {{$errors->has('college_id')?'has-error':''}}">
        <label>College</label>
         <select name="college_id" class="form-control select2" required style="width: 100%;">
           <option value="">--Select College--</option>
            @foreach(\App\Models\College::all() as $college)
              <option {{old('college_id')==$college->id ? 'selected':''}} value="{{$college->id}}">{{$college->name.' ('.$college->abbreviation.')'}}</option>
            @endforeach
          </select>
          @error('college_id')
            <span class="help-block">{{$errors->first('college_id')}}</span>
          @enderror 
      </div>

       <div class="form-group {{$errors->has('abbreviation')?'has-error':''}}">
         <label class="required">Abbreviation</label>
         <input type="text" name="abbreviation" id="abbreviation" class="form-control" value="{{old('abbreviation')}}" placeholder="" required>
          @error('abbreviation')
            <span class="help-block">{{$errors->first('abbreviation')}}</span>
          @enderror 
       </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
     </div>
    <div class="box-footer">
     <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
  </form>