

 @extends('layouts.main')
 @section('title','View College')
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
                            <td>{{$department->name}}</td>
                          </tr>
                          <tr>
                            <td>Abbreviation</td>
                            <td>{{$department->abbreviation}}</td>
                          </tr>
                          <tr>
                            <td>College</td>
                            <td>@if($department->college) {{$department->college->name.' ('.$department->college->abbreviation.')'}} @else <i class="text-danger">Not Found</i> @endif</td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>@if($department->description) $department->description @else <i class="text-danger">Not Found</i>@endif</td>
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

