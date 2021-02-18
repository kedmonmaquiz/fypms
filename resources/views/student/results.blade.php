@extends('layouts.main')

@section('title','My Results')

@section('content')
  
  

     <div class="row">
     	<div class="col-md-12">
     	   <div class="box box-default box-solid">
			   <div class="box-header">
			       <h3 class="box-title">My Results</h3>
			       <div class="box-tools pull-right">
			          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			          </button>
		           </div>
			      </div>
           <div class="box-body ">
	          <table class="table table-bordered table-hover">
	          	    <tr>
	          	    	<th>Category</th>
	          	    	<th>Marks (100%)</th>
	          	    </tr>
				  	<tr>
				  		<td>Mid Semester I Presentation</td>
				  		<td>68</td>
				  	</tr>
				  	<tr>
				  		<td>Final Semester I Presentation</td>
				  		<td>70</td>
				  	</tr>
				  	<tr>
				  		<td>Mid Semester II Presentation</td>
				  		<td>68</td>
				  	</tr>
				  	<tr>
				  		<td>Final Semester II Presentation</td>
				  		<td>90</td>
				  	</tr>

			  </table>
        </div>
    </div>
     	</div>
     </div>

@endsection

@section('js')

@endsection
