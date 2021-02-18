@extends('layouts.main')

@section('title','Projects')

@section('content')
  
     <div class="row">

     	<div class="col-md-12">
     		<div class="box box-default box-solid">
		    <div class="box-header with-border">
		      <h3 class="box-title">Projects</h3>
		      <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		      </div>
		      <!-- /.box-tools -->
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body">
		    	 <table id="datatable" class="data-table table-bordered table table-striped" style="width: 100%">
		        <thead>
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach(\App\Models\Project::all() as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>@if($row->status){{$row->project_status_id}}@else <i class="text-danger">Not Found @endif</i></td>
                                    <td>@if($row->description) {{$row->description}} @else <i class="text-danger">Not Found</i> @endif</td>
                                    <td>
                                    <a href="{{ route('projects.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('projects.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)"  title="Remove Class" onclick="if(confirm('Are you sure?')){getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('projects.destroy',$row->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    </form>
                                  </td>
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
