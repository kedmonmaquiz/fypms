@extends('layouts.main')

@section('title','My Project')

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
		       <table class="table table-bordered">
		       	  <tr>
		       	  	<th>Name</th>
		       	  	<th>Semester</th>
		       	  	<th>week Number</th>
		       	  	<th>Submission Day</th>
		       	  	<th>Remarks</th>
		       	  </tr>
		       	  @foreach(\App\Models\Consultation::all() as $row)
	                <tr>
	                    <td>@if( $row->user){{$row->user->fullName}}@else <i class="text-danger"> - @endif</i></td>
	                    <td>Semester {{$row->semester_type}}</td>
	                    <td>Week Number {{$row->week_number}}</td>
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
