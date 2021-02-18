

 @extends('layouts.main')
 @section('title','Announcement')
 @section('content-header')
  
  
 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                    <div class="box-body">
                       <table class="table table-primary table-bordered">
                          <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>{{$resource->name}}</td>
                          </tr>
                    
                          <tr>
                            <td>File</td>
                            <td>@if($resource->file) {{$resource->file}} @else <i class="text-danger">Not Set</i> @endif</td>
                          </tr>

                           <tr>
                            <td>Description</td>
                            <td>@if($resource->description) {{$resource->description}} @else <i class="text-danger">Not Set</i> @endif</td>
                          </tr>

                          <tr>
                            <td>Created By</td>
                            <td>@if($resource->user) {{$resource->user->fullName}} @else <i class="text-danger">Not Found</i> @endif</td>
                          </tr>
                       </table>
                    </div>
                    
                </div>
                <!-- /.box -->
            </div>
        </div>
 @endsection

 @section('js')
  <script>
   
  </script>
 <script>
   
    $(function(){
      
    });
 </script>
 
 @endsection

