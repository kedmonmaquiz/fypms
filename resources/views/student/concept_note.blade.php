@extends('layouts.main')

@section('title','My Concept Note')

@section('content')
  
     <div class="row">
     	<div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Upload Concept Note</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <form action="{{ route('concept_notes.store') }}" method="post" enctype="multipart/form-data">
		         @csrf
		         <div class="form-group {{$errors->has('file')?'has-error':''}}">
                  <label class="">Upload File </label>
                  <input type="file" name="file">
                    @error('file')
                      <span class="help-block">{{$errors->first('file')}}</span>
                    @enderror 
                 </div>

		          <div>
		          	<span class="text-danger"><strong>IMPORTANT!</strong> Make sure you update a corrent details, once submitted cannot be edited</span>
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
		      <h3 class="box-title">Concept Note</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		        <table id="datatable" class="data-table table table-bordered" style="width:100%;">
		       	  <thead>
		       	  	<tr>
		       	  	<th>#</th>
		       	  	<th>Name</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Status</th>
		       	  	<th>Download</th>
		       	  </tr>
		       	  </thead>
		       	  <tbody>
		       	  	@foreach(\App\Models\ConceptNote::all() as $row)
	                <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td>Concep note {{$loop->index+1}}</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>{{'-'}}</td>
	                    <td><i class="fa fa-download"></i></td>
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
