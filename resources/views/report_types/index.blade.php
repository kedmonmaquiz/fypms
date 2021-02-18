

 @extends('layouts.main')
 @section('title','Project Categories')
 @section('content-header')

 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-3">
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Report Type</h3>
                    </div>
                    <div class="box-body">
                       @include('report_types.create')
                    </div>
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Report Type List</h3>
                    </div>
                    <div class="box-body ">
                        <table id="datatable" class="data-table table-bordered table table-striped" style="width: 100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($reportTypes as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->display_name}}</td>
                                    <td>@if($row->description) {{$row->description}} @else <i class="text-danger">Not Set</i> @endif</td>
                                    <td>
                                    <a href="{{ route('report_types.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('report_types.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="#"  title="Remove Class" onclick="if(confirm('Are you sure you want to delete this?')){
                                      getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('report_types.destroy',$row->id)}}" method="post">
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

