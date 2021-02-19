@extends('layouts.main')

@section('title','My Panel')

@section('content')

   @foreach(\App\Models\Project::all() as $row)  
     <div class="row">
     	<div class="col-md-12">
     		<div class="box box-default box-solid collapsed-box">
		    <div class="box-header with-border">
		      <h3 class="box-title">Group {{$loop->index+1}}: {{$row->title}}</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body" style="">
		       <table id="datatable" class="data-table table table-bordered" style="width: 100%;">
		       	  <tr>
		       	  	<th>S/N</th>
		       	  	<th>Student Name</th>
		       	  	<th>Registration Number</th>
		       	  	<th>Organization of Presentation (10%)</th>
		       	  	<th>Clarity of the Problem (10%)</th>
		       	  	<th>Formulation of Objectives and Specific Objectives (20%)</th>
		       	  	<th>Relevance of Literature Review (15%)</th>
		       	  	<th>Clarity and Correletion of Methodology (15%)</th>
		       	  	<th>Usage of Multimedia and Drawings (10%)</th>
		       	  	<th>Neatness of the PPT (10%)</th>
		       	  	<th>Answering of Questions (10%)</th>
		       	  	<th>Total (100%)</th>
		       	  </tr>
		       	  @foreach($row->users as $u)
	                <tr>
	                	<td>{{$loop->index+1}}</td>
	                    <td>{{$u->fullName}}</td>
	                    <td>{{$u->username}}</td>
	                    <td><input name="semi1_mid_organization_of_presentation" type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                </tr>                               
                 @endforeach
		       </table>

		       <form action=""></form>
		    </div>
		    <!-- /.box-body -->
		  </div>
     	</div>
     </div>
    @endforeach

@endsection

@section('js')

@endsection
