{{-- @extends('layouts.main')

@section('title','Reports')

@section('content')
  
     <div class="row">

     	<div class="col-md-12">
     		<div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Reports</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <table id="datatable" class="table data-table table-bordered" style="width:100%">
		       	  <tr>
		       	  	<th>#</th>
		       	  	<th>Student Name</th>
		       	  	<th>Report Type</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Status</th>
		       	  	<td>view/Reply</td>
		       	  </tr>
		       	  @foreach(\App\Models\Report::all() as $row)
	                <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td>@if($row->user){{$row->user->username}} @else <i class="text-danger">Not Found</i> @endif</td>
	                    <td>@if($row->type){{$row->type->display_name}} @else <i class="text-danger">Not Found</i> @endif</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>@if($row->status){{$row->status}}@else <i class="text-danger">Not Found @endif</i></td>
	                    <td><a href="" class="btn btn-sm btn-success">View</a> <a href="" class="btn btn-sm btn-primary">Reply</a></td>
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
 --}}

 @extends('layouts.main')

@section('title','Reports')

@section('content')
  
     <div class="row">

     	<div class="col-md-12">
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
		       <table id="datatable" class="data-table table table-bordered table-hover" style="width: 100%">
		       	  <thead>
		       	  	 <tr>
			       	  	<th>Student Name</th>
			       	  	<th>Project Title</th>
			       	  	<th>Submitted Reports</th>
			       	  	<th>Actions</th>
		       	  </tr>
		       	  </thead>
		       	 <tbody>
		       	 	@foreach($students as $row)
		                <tr>
		                    <td>{{$row->fullName}}</td>
		                    <td>{{$row->projects->where('project_status_id',$approvedProjectStatusId)->first()->title ?? '-'}}</td>
		                    <td class="text-center"><i class="badge">{{$row->reports->count()}}</i></td>
		                    <td><a href="/supervisor/view-reports/{{$row->id}}"><i class="fa fa-eye"></i></a></td>
		                </tr>                               
                 @endforeach
		       	 </tbody>
		       </table>
		    </div>
		    <!-- /.box-body -->
		  </div>
     	</div>
     </div>

@endsection

@section('js')

@endsection
