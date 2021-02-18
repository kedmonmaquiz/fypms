@extends('layouts.main')

@section('title','My Project')

@section('content')
  
     <div class="row">
     	<div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Create Report</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <form action="{{ route('reports.store') }}" method="post" enctype="multipart/form-data">
		         @csrf
		         <div class="form-group {{$errors->has('report_type_id')?'has-error':''}}">
			        <label>Report Type</label>
			         <select name="report_type_id" class="form-control select2" required style="width: 100%;">
			           <option value="">--Select College--</option>
			            @foreach(\App\Models\ReportType::all() as $type)
			              <option {{old('report_type_id')==$type->id ? 'selected':''}} value="{{$type->id}}">{{$type->display_name}}</option>
			            @endforeach
			          </select>
			          @error('report_type_id')
			            <span class="help-block">{{$errors->first('report_type_id')}}</span>
			          @enderror 
			      </div>

			      <div class="form-group {{$errors->has('file')?'has-error':''}}">
	                  <label class="">Upload File </label>
	                  <input type="file" name="file">
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
     	</div>

     	<div class="col-md-8">
     		<div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Title History</h3>
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
		       	  	<th>#</th>
		       	  	<th>Report Type</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Status</th>
		       	  	<td>Remarks</td>
		       	  </tr>
		       	  @foreach(\App\Models\Report::all() as $row)
	                <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td>@if($row->type){{$row->type->display_name}} @else <i class="text-danger">Not Found</i> @endif</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>@if($row->status){{$row->status}}@else <i class="text-danger">Not Found @endif</i></td>
	                    <td>@if($row->remarks){{$row->remarks}} @else - @endif </td>
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
