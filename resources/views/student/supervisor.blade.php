@extends('layouts.main')

@section('title','My Supervisor')

@section('content')
  
  

     <div class="row">
     	<div class="col-md-12">
     	   <div class="box box-default box-solid">
			   <div class="box-header">
			       <h3 class="box-title">Supervisor Details</h3>
			       <div class="box-tools pull-right">
			          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			          </button>
		           </div>
			      </div>
           <div class="box-body ">
	          <table class="table table-bordered table-hover">
				  	@if(\Auth::user()->supervisor_id < 1)
				  	  <span class="text-danger">You are not assigned a supervisor</span>
                      @else
                       <tr>
				  		<th>Name</th>
				  		<td>{{\App\Models\User::find(\Auth::user()->supervisor_id)->fullName ?? '-'}}</td>
				  	</tr>
				  	<tr>
				  		<th>Phone Number</th>
				  		<td>{{\App\Models\User::find(\Auth::user()->supervisor_id)->phone ?? '-'}}</td>
				  	</tr>
				  	<tr>
				  		<th>Email</th>
				  		<td>{{\App\Models\User::find(\Auth::user()->supervisor_id)->email ?? '-'}}</td>
				  	</tr>
				  	<tr>
				  		<th>Office</th>
				  		<td>{{\App\Models\User::find(\Auth::user()->supervisor_id)->office_no ?? '-'}}</td>
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
