

 @extends('layouts.main')
 @section('title','Announcements')
 @section('content-header')

 @endsection

 @section('content')
    <div class="row">
      <div class="col-md-12" style="margin-bottom: 10px">
        <a href="{{route('announcements.create')}}" class="btn btn-primary pull-left">Add New Announcement</a>
      </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Users List</h3>
                    </div>
                    <div class="box-body ">
                        <table id="datatable" class="data-table table-bordered table table-striped" style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Created By</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>

                              @foreach($announcements as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>@if($row->file) {{$row->file}} @else <i class="text-danger">Not Set</i> @endif</td>
                                    <td>@if($row->user) {{$row->user->fullName}} @else <i class="text-danger">Not Found</i>@endif</td>
                                    <td>
                                    <a href="{{ route('announcements.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('announcements.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="#"  title="Remove Class" onclick="if(confirm('Are you sure you want to delete this announcement?')){getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('announcements.destroy',$row->id)}}" method="post">
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




