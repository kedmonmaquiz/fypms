<form action="{{ route('panels.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <input type="hidden" name="academic_year_id" id="academic_year_id" class="form-control" value="{{$active_year_id}}" placeholder="Eg. Panel 1" required>
         <div class="form-group {{$errors->has('name')?'has-error':''}}">
          <label class="required">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Eg. Panel 1" required>
            @error('name')
              <span class="help-block">{{$errors->first('name')}}</span>
            @enderror 
          </div>

         <div class="form-group {{$errors->has('department_id')?'has-error':''}}">
            <label class="required">Department</label>
             <select name="department_id" class="form-control select2" required style="width: 100%;">
               <option value="">--Select Department--</option>
                @foreach(\App\Models\Department::all() as $department)
                  <option {{old('department_id')==$department->id ? 'selected':''}} value="{{$department->id}}">{{$department->name.' ('.$department->abbreviation.')'}}</option>
                @endforeach
              </select>
              @error('college_id')
                <span class="help-block">{{$errors->first('college_id')}}</span>
              @enderror 
          </div>

         <div class="form-group {{$errors->has('date')?'has-error':''}}">
           <label class="">Date</label>
                <input type="date" name="date" class="form-control" name="date" placeholder="Choose Date">
            @error('date')
              <span class="help-block">{{$errors->first('date')}}</span>
            @enderror 
         </div>

         <div class="form-group {{$errors->has('start_time')?'has-error':''}}">
           <label class="">Start Time</label>
              <input type="time" name="start_time" id="start_time" value="{{old('start_time')}}" class="form-control timepicker" value="{{old('start_time')}}" placeholder="">
            @error('start_time')
              <span class="help-block">{{$errors->first('start_time')}}</span>
            @enderror 
         </div>

         <div class="form-group {{$errors->has('end_time')?'has-error':''}}">
           <label class="">End Time</label>
              <input type="time" name="end_time" class="form-control timepicker" value="{{old('end_time')}}" placeholder="">
            @error('end_time')
              <span class="help-block">{{$errors->first('end_time')}}</span>
            @enderror 
         </div>

       <div class="form-group {{$errors->has('venue')?'has-error':''}}">
        <label class="">Venue</label>
        <input type="text" name="venue" class="form-control" value="{{old('venue')}}" placeholder="">
          @error('venue')
            <span class="help-block">{{$errors->first('venue')}}</span>
          @enderror 
      </div>

      <div class="box-footer">
       <button type="submit" class="btn btn-primary pull-right">Submit</button>
      </div>
    </form>