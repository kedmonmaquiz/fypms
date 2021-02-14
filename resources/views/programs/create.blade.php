<form action="{{ route('programs.store') }}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="form-group {{$errors->has('name')?'has-error':''}}">
          <label class="required">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="" required>
            @error('name')
              <span class="help-block">{{$errors->first('name')}}</span>
            @enderror 
          </div>

          <div class="form-group {{$errors->has('department_id')?'has-error':''}}">
          <label>Department</label>
          <select name="department_id" class="form-control select2" style="width: 100%;">
             <option value="">--Select Department--</option>
              @foreach(\App\Models\Department::all() as $department)
                <option {{old('department_id')==$department->id ? 'selected':''}} value="{{ $department->id}}">{{$department->name.' ('.$department->abbreviation.')'}}</option>
              @endforeach
            </select>
            @error('department_id')
              <span class="help-block">{{$errors->first('department_id')}}</span>
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