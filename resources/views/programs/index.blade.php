

 @extends('layouts.main')
 @section('title','Department')
 @section('content-header')
  
 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Program</h3>
                    </div>
                    <div class="box-body">
                       @include('programs.create')
                    </div>
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Programs List</h3>
                    </div>
                    <div class="box-body ">
                        <table id="datatable" class="data-table table-bordered table table-striped" style="width: 100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Program Name</th>
                                <th>Abbreviation</th>
                                <th>Department</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($programs as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->abbreviation}}</td>
                                    <td>@if($row->department) {{$row->department->abbreviation}} @else <i class="text-danger">Not Found</i> @endif</td>
                                    <td>
                                    <a href="{{ route('programs.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('programs.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="#"  title="Remove Class" onclick="if(confirm('Are you sure?')){getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('programs.destroy',$row->id)}}" method="post">
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
  <script>
   
  </script>
 <script>
   
 </script>
 
 @endsection

