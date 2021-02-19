@extends('layouts.main')

@section('title','My Project')

@section('content')
   @php
     
   @endphp
     <div class="row">   
     	@if(\Auth::user()->projects->count()<1)
	
     	<div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Create Your Project</h3> 
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
		           <label class="required">Project Title</label>
		           <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="" required=>
		            @error('title')
		              <span class="help-block">{{$errors->first('title')}}</span>
		            @enderror 
		          </div>

		          <div class="form-group">
		            <label class="required">Project Description</label>
		            <textarea name="description" id="description" class="form-control" required="">{{old('description')}}</textarea>
		             @error('description')
		              <span class="help-block">{{$errors->first('description')}}</span>
		            @enderror 
		          </div>

		          <div class="form-group {{$errors->has('project_category_id')?'has-error':''}}">
			         <label class="required">Project Category</label>
			         <select name="project_category_id" class="form-control select2" required style="width: 100%;">
			           <option value="">--Select Category--</option>
			            @foreach(\App\Models\ProjectCategory::all() as $cat)
			              <option {{old('project_category_id')==$cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->display_name}}</option>
			            @endforeach
			          </select>
			          @error('project_category_id')
			            <span class="help-block">{{$errors->first('project_category_id')}}</span>
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
		       <table id="datatable" class="data-table table table-bordered table-hover" style="width: 100%;">
		       	  <tr>
		       	  	<th>#</th>
		       	  	<th>Project Title</th>
		       	  	<th>Project Description</th>
		       	  	<th>Project Category</th>
		       	  	<th>Project Status</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Remarks</th>
		       	  	<th>Actions</th>
		       	  </tr>
		       	  @foreach(\Auth::user()->projects as $row)
		           <tr>
		                <td>{{$loop->index+1}}</td>
		                <td>{{$row->title}}</td>
		                <td>{{$row->description}}</td>
		                <td>@if($row->projectCategory){{$row->projectCategory->display_name}}@else <i class="text-danger">Not Found @endif</i></td>
		                <td>@if($row->projectStatus) <i class="badge bg-blue">{{$row->projectStatus->display_name}}</i> @else <i class="text-danger">Not Found @endif</i></td>
		                <td>{{date($row->created_at)}}</td>
		                <td>-</td>
		                <td>
		                  @if($row->projectStatus->name=='waiting')
		                    <a href="javascript:void()"  title="Edit Class" data-toggle="modal" data-target="#edit-project-{{$row->id}}"><i class="fa fa-pencil"></i></a>
		                    @else
		                     -
		                  @endif
		                 </td>
		            </tr>  

		             <!--Edit Panel-->
		                <div class="modal fade" id="edit-project-{{$row->id}}">
		                  <div class="modal-dialog">
		                    <div class="modal-content">
		                      <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span></button>
		                        <h4 class="modal-title">Edit {{$row->title}}</h4>
		                      </div>
		                      <div class="modal-body">
		                         <form action="/projects/{{$row->id}}" method="post" enctype="multipart/form-data">
						                 @csrf
						                 @method('PATCH')

						                 <div class="row">
						                    <div class="col-md-6">
						                      <div class="form-group {{$errors->has('title')?'has-error':''}}">
										          <label class="required">Project Title</label>
										          <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $row->title}}" placeholder="" required>
										            @error('title')
										              <span class="help-block">{{$errors->first('title')}}</span>
										            @enderror 
										          </div>
						                    </div>

						                   <div class="col-md-6"> 
						                     <div class="form-group {{$errors->has('project_category_id')?'has-error':''}}">
										         <label class="required">Project Category</label>
										         <select name="project_category_id" class="form-control select2" required style="width: 100%;">
										           <option value="">--Select Category--</option>
										            @foreach(\App\Models\ProjectCategory::all() as $cat)
										              <option {{old('project_category_id')==$cat->id || $row->project_category_id == $cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->display_name}}</option>
										            @endforeach
										          </select>
										          @error('project_category_id')
										            <span class="help-block">{{$errors->first('project_category_id')}}</span>
										          @enderror 
										      </div>
						                   </div>

						                 <div class="col-md-12">
						                    <div class="form-group">
									            <label class="required">Project Description</label>
									            <textarea name="description" id="description" class="form-control" required="">{{old('description')??$row->description}}</textarea>
									             @error('description')
									              <span class="help-block">{{$errors->first('description')}}</span>
									            @enderror 
									          </div>
						                 </div>

						              </div>

					              <div class="box-footer">
					               <button type="submit" class="btn btn-primary pull-right">Submit</button>
					              </div>
					            </form>
		                      </div>
		                      <!-- /.modal-body -->
		                    </div>
		                    <!-- /.modal-content -->
		                  </div>
		                  <!-- /.modal-dialog -->
		                </div>
		                <!-- /.Edit modal -->                                
		         @endforeach
		       </table>
		      </div>
		       <!-- /.box-body -->
		      </div>
	    </div>

     	@else
          @if(\Auth::user()->projects->last()->projectStatus->name =='rejected')
            <div class="col-md-4">
     	   <div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Create Your Project</h3> 
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
		           <label class="required">Project Title</label>
		           <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="" required=>
		            @error('title')
		              <span class="help-block">{{$errors->first('title')}}</span>
		            @enderror 
		          </div>

		          <div class="form-group">
		            <label class="required">Project Description</label>
		            <textarea name="description" id="description" class="form-control" required="">{{old('description')}}</textarea>
		             @error('description')
		              <span class="help-block">{{$errors->first('description')}}</span>
		            @enderror 
		          </div>

		          <div class="form-group {{$errors->has('project_category_id')?'has-error':''}}">
			         <label class="required">Project Category</label>
			         <select name="project_category_id" class="form-control select2" required style="width: 100%;">
			           <option value="">--Select Category--</option>
			            @foreach(\App\Models\ProjectCategory::all() as $cat)
			              <option {{old('project_category_id')==$cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->display_name}}</option>
			            @endforeach
			          </select>
			          @error('project_category_id')
			            <span class="help-block">{{$errors->first('project_category_id')}}</span>
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
		       <table id="datatable" class="data-table table table-bordered table-hover" style="width: 100%;">
		       	  <tr>
		       	  	<th>#</th>
		       	  	<th>Project Title</th>
		       	  	<th>Project Description</th>
		       	  	<th>Project Category</th>
		       	  	<th>Status</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Remarks</th>
		       	  	<th>Actions</th>
		       	  </tr>
		       	  @foreach(\Auth::user()->projects as $row)
		           <tr>
		                <td>{{$loop->index+1}}</td>
		                <td>{{$row->title}}</td>
		                <td>{{$row->description}}</td>
		                <td>@if($row->projectCategory){{$row->projectCategory->display_name}}@else <i class="text-danger">Not Found @endif</i></td>
		                <td>@if($row->projectStatus) <i class="badge badge-default">{{$row->projectStatus->display_name}}</i> @else <i class="text-danger">Not Found @endif</i></td>
		                <td>{{date($row->created_at)}}</td>
		                <td>-</td>
		                <td>
		                  @if($row->projectStatus->name=='waiting')
		                    <a href="javascript:void()"  title="Edit Class" data-toggle="modal" data-target="#edit-project-{{$row->id}}"><i class="fa fa-pencil"></i></a>
		                    @else
		                     -
		                  @endif
		                 </td>
		            </tr>  

		             <!--Edit Panel-->
		                <div class="modal fade" id="edit-project-{{$row->id}}">
		                  <div class="modal-dialog">
		                    <div class="modal-content">
		                      <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span></button>
		                        <h4 class="modal-title">Edit {{$row->title}}</h4>
		                      </div>
		                      <div class="modal-body">
		                         <form action="/projects/{{$row->id}}" method="post" enctype="multipart/form-data">
						                 @csrf
						                 @method('PATCH')

						                 <div class="row">
						                    <div class="col-md-6">
						                      <div class="form-group {{$errors->has('title')?'has-error':''}}">
										          <label class="required">Project Title</label>
										          <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $row->title}}" placeholder="" required>
										            @error('title')
										              <span class="help-block">{{$errors->first('title')}}</span>
										            @enderror 
										          </div>
						                    </div>

						                   <div class="col-md-6"> 
						                     <div class="form-group {{$errors->has('project_category_id')?'has-error':''}}">
										         <label class="required">Project Category</label>
										         <select name="project_category_id" class="form-control select2" required style="width: 100%;">
										           <option value="">--Select Category--</option>
										            @foreach(\App\Models\ProjectCategory::all() as $cat)
										              <option {{old('project_category_id')==$cat->id || $row->project_category_id == $cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->display_name}}</option>
										            @endforeach
										          </select>
										          @error('project_category_id')
										            <span class="help-block">{{$errors->first('project_category_id')}}</span>
										          @enderror 
										      </div>
						                   </div>

						                 <div class="col-md-12">
						                    <div class="form-group">
									            <label class="required">Project Description</label>
									            <textarea name="description" id="description" class="form-control" required="">{{old('description')??$row->description}}</textarea>
									             @error('description')
									              <span class="help-block">{{$errors->first('description')}}</span>
									            @enderror 
									          </div>
						                 </div>

						              </div>

					              <div class="box-footer">
					               <button type="submit" class="btn btn-primary pull-right">Submit</button>
					              </div>
					            </form>
		                      </div>
		                      <!-- /.modal-body -->
		                    </div>
		                    <!-- /.modal-content -->
		                  </div>
		                  <!-- /.modal-dialog -->
		                </div>
		                <!-- /.Edit modal -->                                
		         @endforeach
		       </table>
		      </div>
		       <!-- /.box-body -->
		      </div>
	     </div>

	     @else
	       <div class="col-md-12">
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
		       <table id="datatable" class="data-table table table-bordered table-hover" style="width: 100%;">
		       	  <tr>
		       	  	<th>#</th>
		       	  	<th>Project Title</th>
		       	  	<th>Project Description</th>
		       	  	<th>Project Category</th>
		       	  	<th>Status</th>
		       	  	<th>Submission Date</th>
		       	  	<th>Remarks</th>
		       	  	<th>Actions</th>
		       	  </tr>
		       	  @foreach(\Auth::user()->projects as $row)
		           <tr>
		                <td>{{$loop->index+1}}</td>
		                <td>{{$row->title}}</td>
		                <td>{{$row->description}}</td>
		                <td>@if($row->projectCategory){{$row->projectCategory->display_name}}@else <i class="text-danger">Not Found @endif</i></td>
		                <td>@if($row->projectStatus) <i class="badge badge-default">{{$row->projectStatus->display_name}}</i> @else <i class="text-danger">Not Found @endif</i></td>
		                <td>{{date($row->created_at)}}</td>
		                <td>-</td>
		                <td>
		                  @if($row->projectStatus->name=='waiting')
		                    <a href="javascript:void()"  title="Edit Class" data-toggle="modal" data-target="#edit-project-{{$row->id}}"><i class="fa fa-pencil"></i></a>
		                    @else
		                     -
		                  @endif
		                 </td>
		            </tr>  

		             <!--Edit Panel-->
		                <div class="modal fade" id="edit-project-{{$row->id}}">
		                  <div class="modal-dialog">
		                    <div class="modal-content">
		                      <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                          <span aria-hidden="true">&times;</span></button>
		                        <h4 class="modal-title">Edit {{$row->title}}</h4>
		                      </div>
		                      <div class="modal-body">
		                         <form action="/projects/{{$row->id}}" method="post" enctype="multipart/form-data">
						                 @csrf
						                 @method('PATCH')

						                 <div class="row">
						                    <div class="col-md-6">
						                      <div class="form-group {{$errors->has('title')?'has-error':''}}">
										          <label class="required">Project Title</label>
										          <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $row->title}}" placeholder="" required>
										            @error('title')
										              <span class="help-block">{{$errors->first('title')}}</span>
										            @enderror 
										          </div>
						                    </div>

						                   <div class="col-md-6"> 
						                     <div class="form-group {{$errors->has('project_category_id')?'has-error':''}}">
										         <label class="required">Project Category</label>
										         <select name="project_category_id" class="form-control select2" required style="width: 100%;">
										           <option value="">--Select Category--</option>
										            @foreach(\App\Models\ProjectCategory::all() as $cat)
										              <option {{old('project_category_id')==$cat->id || $row->project_category_id == $cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->display_name}}</option>
										            @endforeach
										          </select>
										          @error('project_category_id')
										            <span class="help-block">{{$errors->first('project_category_id')}}</span>
										          @enderror 
										      </div>
						                   </div>

						                 <div class="col-md-12">
						                    <div class="form-group">
									            <label class="required">Project Description</label>
									            <textarea name="description" id="description" class="form-control" required="">{{old('description')??$row->description}}</textarea>
									             @error('description')
									              <span class="help-block">{{$errors->first('description')}}</span>
									            @enderror 
									          </div>
						                 </div>

						              </div>

					              <div class="box-footer">
					               <button type="submit" class="btn btn-primary pull-right">Submit</button>
					              </div>
					            </form>
		                      </div>
		                      <!-- /.modal-body -->
		                    </div>
		                    <!-- /.modal-content -->
		                  </div>
		                  <!-- /.modal-dialog -->
		                </div>
		                <!-- /.Edit modal -->                                
		         @endforeach
		       </table>
		      </div>
		       <!-- /.box-body -->
		      </div>
	     </div>
        @endif
         
     	  
     	@endif
     	
  </div>

@endsection

@section('js')

@endsection
