@extends('layouts.main')

@section('title','My Project')

@section('content')
  
     <div class="row">
     	<div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Create Project</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		       <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
		         @csrf
		         <div class="form-group {{$errors->has('title')?'has-error':''}}">
		          <label class="required">Title</label>
		          <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="" required>
		            @error('title')
		              <span class="help-block">{{$errors->first('title')}}</span>
		            @enderror 
		          </div>

		          <div class="form-group">
		            <label class="required">Description</label>
		            <textarea name="description" id="description" class="form-control" required="">{{old('description')}}</textarea>
		             @error('description')
		              <span class="help-block">{{$errors->first('description')}}</span>
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
		      <h3 class="box-title">Title History</h3>
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
		       	  	<th>#</th>
		       	  	<th>Project Title</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Status</th>
		       	  </tr>
		       	  @foreach(\App\Models\Project::all() as $row)
	                <tr>
	                    <td>{{$loop->index+1}}</td>
	                    <td>{{$row->title}}</td>
	                    <td>{{date($row->created_at)}}</td>
	                    <td>@if($row->status){{$row->project_status_id}}@else <i class="text-danger">Not Found @endif</i></td>
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
