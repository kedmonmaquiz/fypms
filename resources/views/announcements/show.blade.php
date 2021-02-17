

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
                            <td>Title</td>
                            <td>{{$announcement->title}}</td>
                          </tr>
                    
                          <tr>
                            <td>Body</td>
                            <td>{!! $announcement->body !!}</td>
                          </tr>
                          <tr>
                            <td>File</td>
                            <td>@if($announcement->file) {{$announcement->file}} @else <i class="text-danger">Not Set</i> @endif</td>
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

