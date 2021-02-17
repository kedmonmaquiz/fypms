

 @extends('layouts.main')
 @section('title','View College')
 @section('content-header')
 
 @endsection

 @section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">View College</h3>
                    </div>
                    <div class="box-body">
                       <table class="table table-primary table-bordered">
                          <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>{{$college->name}}</td>
                          </tr>
                          <tr>
                            <td>Abbreviation</td>
                            <td>{{$college->abbreviation}}</td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>@if($college->description) {{$college->description}} @else <i class="text-danger">Not Found</i>@endif</td>
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

