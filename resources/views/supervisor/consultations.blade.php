@extends('layouts.main')

@section('title','Consultations')

@section('content')
  
     <div class="row">

     	<div class="col-md-12">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">My Students</h3>
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
			       	  	<th>Number of Submitted Forms</th>
			       	  	<th>Actions</th>
		       	  </tr>
		       	  </thead>
		       	 <tbody>
		       	 	@foreach($students as $row)
		                <tr>
		                    <td>{{$row->fullName}}</td>
		                    <td>{{$row->projects->where('project_status_id',$approvedProjectStatusId)->first()->title ?? '-'}}</td>
		                    <td class="text-center"><i class="badge">{{$row->consultations->count()}}</i></td>
		                    <td><a href="/supervisor/view-consultations/{{$row->id}}"><i class="fa fa-eye"></i></a></td>
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
