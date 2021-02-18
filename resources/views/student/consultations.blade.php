@extends('layouts.main')

@section('title','My Project')

@section('content')
  
     <div class="row">
     	<div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Create Consulation</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <form action="{{ route('consultations.store') }}" method="post" enctype="multipart/form-data">
		         @csrf
		         <div class="form-group {{$errors->has('semester_type')?'has-error':''}}">
		          <label class="required">Semester</label>
                     <select name="semester_type" class="form-control select2" style="width: 100%;">
                        <option value="">--Select Semester--</option>
                        <option {{old('semester_type')==1 ? 'selected':''}} value="1">First Semester</option>
                        <option {{old('semester_type')==2 ? 'selected':''}} value="2">Second Semester</option>
                      </select>
                      @error('semester_type')
                       <span class="help-block">{{$errors->first('semester_type')}}</span>
                      @enderror
                    </div>

                     <div class="form-group {{$errors->has('week_number')?'has-error':''}}">
		              <label class="required">Week Number</label>
                      <select name="week_number" class="form-control select2" style="width: 100%;">
                        <option value="">--Select Semester--</option>
                        @for($i=1;$i<=15;$i++)
                          <option {{old('week_number')==$i ? 'selected':''}} value="{{$i}}">Week {{$i}}</option>
                        @endfor
                      </select>
                      @error('week_number')
                       <span class="help-block">{{$errors->first('week_number')}}</span>
                      @enderror
                    </div>

                    <div class="form-group">
			            <label class="required">Assigned Task</label>
			            <textarea name="assigned_task" class="form-control" required>{{old('assigned_task')}}</textarea>
			             @error('assigned_task')
			              <span class="help-block">{{$errors->first('assigned_task')}}</span>
			            @enderror 
		            </div>

		            <div class="form-group">
			            <label class="required">Accomplished Task</label>
			            <textarea name="accomplished_task" class="form-control" required>{{old('accomplished_task')}}</textarea>
			             @error('accomplished_task')
			              <span class="help-block">{{$errors->first('accomplished_task')}}</span>
			            @enderror 
		            </div>
                    
                    <div class="form-group">
			            <label class="">Challenge</label>
			            <textarea name="challenge" class="form-control">{{old('challenge')}}</textarea>
			             @error('challenge')
			              <span class="help-block">{{$errors->first('challenge')}}</span>
			            @enderror 
		            </div>
		          
		          <div>
		          	<span class="text-danger"><strong>IMPORTANT!</strong> Make sure you update a corrent details, once submitted cannot be edited</span>
		          </div>

		      <div class="box-footer">
		       <button type="submit" class="btn btn-primary pull-right">Submit</button>
		      </div>
		    </form>
		    </div>
		    <!-- /.box-body -->
		  </div>
     	</div>

     	<div class="col-md-8">
     		<div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Submitted Consultations</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <table class="table table-bordered">
		       	  <tr>
		       	  	<th>Week No</th>
		       	  	<th>Submission Day</th>
		       	  	<th>Remarks</th>
		       	  </tr>
		       	  @foreach(\App\Models\Consultation::all() as $row)
	                <tr>
	                    <td>Week {{$row->week_number}}</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>@if( $row->remarks){{$row->remarks}}@else <i class="text-danger"> - @endif</i></td>
	                </tr>                               
                 @endforeach
		       </table>
		    </div>
		    <!-- /.box-body -->
		  </div>
     	</div>
     </div>

@endsection

@section('js')

@endsection
