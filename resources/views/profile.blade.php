@extends('layouts.main')

@section('title','Home')

@section('content')
  
  

     <div class="row">
     	<div class="col-md-12">
     	 <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">My Profile</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
          <table class="table table-bordered table-hover">
			  	@if(\Auth::user()->hasRole('student'))
                 <tr>
			  		<th>Registration Number</th>
			  		<td>{{\Auth::user()->username}}</td>
			  	</tr>
			  	@else
                   <tr>
			  		<th>User Name</th>
			  		<td>{{\Auth::user()->username}}</td>
			  	</tr>
			  	@endif
			  	<tr>
			  		<th>First Name</th>
			  		<td>{{\Auth::user()->first_name}}</td>
			  	</tr>
			  	<tr>
			  		<th>Middle Name</th>
			  		<td>{{\Auth::user()->middle_name ?? '-'}}</td>
			  	</tr>
			  	<tr>
			  		<th>Last Name</th>
			  		<td>{{\Auth::user()->last_name}}</td>
			  	</tr>
			  	<tr>
			  		<th>Email</th>
			  		<td>{{\Auth::user()->email ?? '-'}}</td>
			  	</tr>
			  	<tr>
			  		<th>College</th>
			  		<td>{{\Auth::user()->program->department->college->name ?? \Auth::user()->department->college->name}}</td>
			  	</tr>
			  	<tr>
			  		<th>Department</th>
			  		<td>{{\Auth::user()->program->department->name ?? \Auth::user()->department->name}}</td>
			  	</tr>
			  	@if(\Auth::user()->hasRole('student'))
                  <tr>
			  		<th>Enrolled Program</th>
			  		<td>{{\Auth::user()->program->name ?? '-'}}</td>
			  	</tr>
			  	@endif
		  </table>
        </div>
       </div>
     	</div>		
     </div>

@endsection

@section('js')

@endsection
