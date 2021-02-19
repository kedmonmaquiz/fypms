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
		      <h3 class="box-title">Submitted Reports</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <table id="datatable" class="data-table table table-bordered" style="width:100%">
		       	  <thead>
		       	  	 <tr>
			       	  	<th>#</th>
			       	  	<th>Report Type</th>
			       	  	<th>Submission Date</th>
			       	  	<th>Status</th>
			       	  	<td>Remarks</td>
			       	  	<td>Download</td>
		       	  </tr>
		       	  </thead>	
		       	  @foreach(\App\Models\Report::all() as $row)
	                <tbody>
	                  <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td>@if($row->reportType){{$row->reportType->display_name}} @else <i class="text-danger">Not Found</i> @endif</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>@if($row->reportStatus) <i class="badge">{{$row->reportStatus->display_name}}</i> @else <i class="text-danger">Not Found @endif</i></td>
	                    <td>@if($row->remarks){{$row->remarks}} @else - @endif </td>
	                    <td class="text-center"><span class="fa fa-download"></span></td>
	                </tr>     
	                </tbody>                          
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
