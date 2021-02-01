

 @extends('layouts.main')
 @section('title','View College')
 @section('content-header')
  
 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <table class="table table-primary table-bordered" style="width:100%">
                          <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>{{$academicYear->name}}</td>
                          </tr>
                          <tr>
                            <td>Status</td>
                            <td><span class="badge {{$academicYear->status==1 ? 'badge-success' : 'badge-primary'}}">{{$academicYear->statusName}}</span></td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>@if($academicYear->description) {{$academicYear->description}} @else <i class="text-danger">Not Found</i>@endif</td>
                          </tr>
                       </table>
                    </div>
                    
                </div>
                <!-- /.box -->
            </div>
        </div>
 @endsection

 @section('js')
 
 
 @endsection

