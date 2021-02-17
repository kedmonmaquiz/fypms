

 @extends('layouts.main')
 @section('title','Department')
 @section('content-header')

 @endsection

 @section('content')
    <div class="row" style="margin-bottom: 10px">
      <div class="col-md-12">
        <a href="{{route('users.create')}}" class="btn btn-primary pull-left">Add New User</a>
      </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Users List</h3>
                    </div>
                    <div class="box-body">
                        <table id="datatable" class="data-table table-bordered table table-striped" style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Academic Year</th>
                                <th>Roles</th>
                                <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($users as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->username}}</td>
                                    <td>{{$row->first_name}}</td>
                                    <td>{{$row->last_name}}</td>
                                    <td>{{$row->gender}}</td>
                                    <td> @if($row->academicYear) {{$row->academicYear->name}}</i> @else <i class="text-danger">Not Set</i> @endif</td>
                                    
                                    <td>@if($row->roles) @foreach($row->roles as $role) <i class="badge badge-primary">{{$role->display_name}}</i> @endforeach @endif</td>
                                    <td>
                                    <a href="{{ route('users.show',$row->id) }}"  title="View Class"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('users.edit',$row->id) }}"  title="Edit Class" ><i class="fa fa-pencil"></i></a>
                                    <a href="#"  title="Remove Class" onclick="if(confirm('Are you sure?')){getElementById('deleteForm-{{$row->id}}').submit()}" ><i class="fa fa-trash"></i></a>
                                    
                                    <form id="deleteForm-{{$row->id}}" action="{{route('users.destroy',$row->id)}}" method="post">
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

