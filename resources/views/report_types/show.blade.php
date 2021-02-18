

 @extends('layouts.main')
 @section('title','Project Status')
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
                            <td>{{$reportType->name}}</td>
                          </tr>

                          <tr>
                            <td>Display Name</td>
                            <td>{{$reportType->display_name}}</td>
                          </tr>
                    
                          <tr>
                            <td>Description</td>
                            <td>@if($reportType->description) {{$reportType->description}} @else <i class="text-danger">Not Found</i>@endif</td>
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

