
 @extends('layouts.main')
 @section('title','Panels')

 @section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Panel</h3>
                    </div>
                    <div class="box-body">
                      @include('panels.create')
                    </div>
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Panels List</h3>
                    </div>
                    <div class="box-body ">
                        <table id="datatable" class="data-table table-bordered table table-striped" style="width: 100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Panel Name</th>
                                <th>Department</th>
                                <th>Academic Year</th>
                                <th>Date</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($panels as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>@if($row->department) {{$row->department->abbreviation}} @else <i class="text-danger">Not Found</i> @endif</td>
                                    <td>@if($row->academicYear) {{$row->academicYear->name}} @else <i class="text-danger">Not Found</i> @endif</td>
                                    <td>@if($row->date) {{$row->date}} @else <i class="text-danger">Not Set</i> @endif</td>
                                    <td>@if($row->start_time) {{$row->start_time}} @else <i class="text-danger">Not Set</i> @endif</td>
                                    <td>@if($row->end_time) {{$row->end_time}} @else <i class="text-danger">Not Set</i> @endif</td>
                                    <td>
                                    <a href="{{ route('panels.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('panels.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="#"  title="Remove Class" onclick="if(confirm('Are you sure?')){getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('panels.destroy',$row->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    </form>
                                  </td>
                                </tr>                                
                              @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 @endsection

 @section('js')
  
 
 @endsection

