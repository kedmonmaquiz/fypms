@extends('layouts.main')

@section('title','My Supervisor')

@section('content')
  
  

     <div class="row">
     	<div class="col-md-10">
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
				  	<tr>
				  		<th>Name</th>
				  		<td>Dr. Joseph Cosmas</td>
				  	</tr>
				  	<tr>
				  		<th>Phone Number</th>
				  		<td>0789898989</td>
				  	</tr>
				  	<tr>
				  		<th>Email</th>
				  		<td>josephcosmas@gmail.com</td>
				  	</tr>
				  	<tr>
				  		<th>Office</th>
				  		<td>B206</td>
				  	</tr>

			  </table>
            </div>
          </div>
     	</div>
     </div>

@endsection

@section('js')

@endsection
